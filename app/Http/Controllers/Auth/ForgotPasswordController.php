<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Carbon\Carbon;
use Mail;
use App\Http\Requests\RequestResetPassword;

class ForgotPasswordController extends Controller
{
    public function getFormResetPassword(){
        return view('auth.passwords.email');
    }
    public function sendCodeResetPassword(Request $request){
        $email = $request->email;

        $checkUser = User::where('email',$email)->first();
    
        if(!$checkUser){
            return redirect()->back()->with('danger','Email does not exist');
            }

        $code = bcrypt(md5(time().$email));

        $checkUser->code = $code;
        $checkUser->time_code = Carbon::now();
        $checkUser->save();

        $url = route('get.link.reset.password',['code' => $checkUser->code,'email' => $email]);

        $data = [
            'route' => $url
        ];


        Mail::send('email.reset-password', $data, function($message) use ($email){
            $message->to($email, 'dcm')->subject('Reset Password');
        });

        return redirect()->route('login')->with('success','Password retrieval link has been sent to your email');
    }

    public function resetPassword(Request $request){
        $code = $request->code;
        $email = $request->email;

        $checkUser = User::where([
            'code' => $code,
            'email' => $email
        ])->first();

        if(!$checkUser){
            return redirect('/')->with('danger', 'Sorry! The password reset link is incorrect, please try again later');
        }

        return view('auth.passwords.reset');
    }
    public function saveResetPassword(RequestResetPassword $requestResetPassword){
        if ($requestResetPassword->password){

            $code = $requestResetPassword->code;
            $email = $requestResetPassword->email;
    
            $checkUser = User::where([
                'code' => $code,
                'email' => $email
            ])->first();

            if(!$checkUser){
            return redirect('/')->with('danger', 'Sorry! The password reset link is incorrect, please try again later');
            }

            $checkUser->password = $requestResetPassword->password;
            $checkUser->save();

            return redirect()->route('login')->with('success', 'Password has been changed successfully. Please login again');
        }
    }
}
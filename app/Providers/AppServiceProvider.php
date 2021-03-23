<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Cart;
use App\Category;
use Illuminate\Support\Facades\Session;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        view()->composer('*', function ($view) 
        {
            $loai_sp = Category::where('status',1)->get();
            $view->with('loai_sp',$loai_sp);    
        });  
        view()->composer('*', function ($view) 
        {
            $cart = new Cart;
            $view->with([
                'cart'=> $cart
            ]);    
        });  
       
    }
}

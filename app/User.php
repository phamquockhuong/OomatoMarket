<?php

namespace App;

use App\Models\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasRoles;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','img_users'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // Only accept a valid password and
    // hash a password before saving
    public function setPasswordAttribute($password)
    {
        if ( $password !== null & $password !== "" )
        {
            $this->attributes['password'] = bcrypt($password);
        }
    }
    public function hasPermission($route)
    {
       $routes = $this->routes();
       array_push($routes, 'home');
       return in_array($route, $routes) ? true : false;
      
      
    }
    public function routes()
    {
        $routes=[];
        foreach ($this->getRoles as $role) {
           //var_dump($role);
            $Permission = json_decode($role->permissions, true);
            // dd($role->Permissions);
            if (is_array($Permission)) {
                foreach ($Permission as $key => $value) {
                    $routes[]=$value;
                }
            }
            
            
        }
        return $routes;
    }
    public function getRoles(){

        return  $this->belongsToMany(Role::class,'user_roles','user_id','role_id');
    }


}

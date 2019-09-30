<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //get the role for the user
    public function role()
    {
        return $this->belongsTo('App\Role');
    }


    //authorize role

    public function authorizeRole($role)
    {
      return $this->hasRole($role) || 
             abort(401, 'This action is unauthorized.');
    }


    /**
    * Check one role
    * @param string $role
    */
    public function hasRole($role)
    {
      return null !== $this->role()->where(‘name’, $role)->first();
    }

//1-M with order
    public function orders(){
        return $this->hasMany('App\Order');
    }


    public function discussions(){

        return $this->hasMany('App\Discussion');
    }
}

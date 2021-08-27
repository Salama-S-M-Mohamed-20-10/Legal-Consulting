<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','gender','date',
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


    public function setPasswordAttribute($password){
        if(!empty($password)) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    public function comments(){
        return $this -> hasMany('App\Models\Comment','user_id','id');
    }

    public function reservation(){
        return $this -> belongsTo('App\Models\Reservation','user_id','id');
    }

    public function appointment(){
        return $this -> belongsTo('App\Models\Appointment','user_id','id');
    }

    public function favourites(){
        return $this -> hasMany('App\Models\Favourite','user_id','id');
    }

    public function messages(){
        return $this -> hasMany('App\Models\Message','user_id','id');
    }
}

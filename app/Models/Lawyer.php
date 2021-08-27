<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lawyer extends Authenticatable
{
    protected $guarded = [];
    protected $fillable = [
        'id','firstName', 'lastName', 'name', 'email', 'password','gender','phone','governorate','region','specialy','address','productimg','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];


    public function getActive(){
        return $this -> active == 1 ? 'مفعل' : 'غير مفعل';
    }

    public function comments(){
        return $this -> hasMany('App\Models\Comment','lawyer_id','id');
    }

    public function reservations(){
        return $this -> hasMany('App\Models\Reservation','lawyer_id','id');
    }

    public function appointments(){
        return $this -> hasMany('App\Models\Appointment','lawyer_id','id');
    }

    public function favourites(){
        return $this -> hasMany('App\Models\Favourite','lawyer_id','id');
    }

    public function lawyerTimeAvailables(){
        return $this -> hasMany('App\Models\Lawyertimeavailable','lawyer_id','id');
    }

    public function messages(){
        return $this -> hasMany('App\Models\Message','lawyer_id','id');
    }
}

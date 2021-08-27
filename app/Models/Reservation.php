<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'id','date', 'time', 'user_id', 'username', 'lawyer_id','created_at','updated_at'
    ];

    public function users(){
        return $this -> hasMany('App\User','user_id','id');
    }

    public function lawyer(){
        return $this -> belongsTo('App\Models\Lawyer','lawyer_id','id');
    }
}

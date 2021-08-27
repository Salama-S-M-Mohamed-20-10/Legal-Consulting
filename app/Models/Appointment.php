<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'id', 'day','time', 'date', 'user_id', 'lawyer_id','created_at','updated_at'
    ];

    public function users(){
        return $this -> hasMany('App\User','user_id','id');
    }

    public function lawyer(){
        return $this -> belongsTo('App\Models\Lawyer','lawyer_id','id');
    }
    
    public function times(){
        return $this -> hasMany('App\Models\Time','appointment_id','id');
    }

}

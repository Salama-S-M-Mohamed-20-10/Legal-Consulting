<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = [
        'id','time', 'reservation_id','created_at','updated_at'
    ];

    public function Appointment(){
        return $this -> belongsTo('App\Models\Appointment','appointment_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'id','user_id', 'lawyer_id', 'user', 'lawyer','message','created_at','updated_at'
    ];

    public function user(){
        return $this -> belongsTo('App\User','user_id','id');
    }

    public function lawyer(){
        return $this -> belongsTo('App\Models\Lawyer','lawyer_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id','comment', 'user_id', 'username', 'lawyer_id','created_at','updated_at'
    ];

    public function user(){
        return $this -> belongsTo('App\User','user_id','id');
    }

    public function lawyer(){
        return $this -> belongsTo('App\Models\Lawyer','lawyer_id','id');
    }
}

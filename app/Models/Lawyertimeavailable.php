<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lawyertimeavailable extends Model
{
    protected $table="lawyertimeavailables";
    protected $fillable = [
        'id','date','from','to', 'lawyer_id','created_at','updated_at'
    ];

    public function lawyer(){
        return $this -> belongsTo('App\Models\Lawyer','lawyer_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'id','name', 'email', 'phone', 'comment','created_at','updated_at'
    ];
}

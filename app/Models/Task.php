<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'user_id'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}


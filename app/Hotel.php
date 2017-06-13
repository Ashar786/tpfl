<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function Comments(){
    	return $this->hasMany(Comment::class);
    }
}

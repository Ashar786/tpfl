<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function hotel(){
    	return $this->belongsTo(hotel::class);
    }
}

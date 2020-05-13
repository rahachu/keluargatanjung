<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    //
    protected $table = "_avatar_";
    protected $fillable = ['panggilan','x','y','newHeight','newWidth','originalHeight','originalWidth','zoom'];
}

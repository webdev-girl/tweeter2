<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TweetLike extends Model
{
    public function getCreatedDateAttribute() {
           return $this->created_at->diffForHumans();
       }
}

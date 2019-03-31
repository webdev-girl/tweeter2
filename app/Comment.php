<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    public function tweets(){
        return $this->belongsTo('App\Tweet');
    }

    public function user()
  {
      return $this->belongsTo(User::class);
  }
    public function getCreatedDateAttribute() {
      return $this->created_at->diffForHumans();
  }
}

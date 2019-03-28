<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    protected $fillable = ['user_id', 'tweet'];

       protected $appends = ['createdDate'];

       public function user(){
           return $this->belongsTo(User::class);
       }

       public function getCreatedDateAttribute() {
           return $this->created_at->diffForHumans();
       }

}

  //
  // public function user(){
  //     return $this->belongsTo('App\User');
  // }

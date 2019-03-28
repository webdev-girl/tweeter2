<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    public function follower(){
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id')->withTimestamps();
}

        /**
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
        public function followings()
        {
            return $this->belongsToMany(User::class, 'followers', 'follower_id', 'user_id')->withTimestamps();
        }
}

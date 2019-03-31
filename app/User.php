<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $appends = ['profileLink'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
        /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */




    public function tweets(){

   return $this->hasMany(Tweet::class);
    }

        public function follows(User $user)
        {
            $this->following()->attach($user->id);
        }

        public function unfollows(User $user)
        {
            $this->following()->detach($user->id);
        }

        public function following()
        {
            return $this->belongsToMany('App\User', 'following', 'user_id', 'follower_id')->withTimestamps();
        }

        public function isFollowing(User $user)
        {
            return !is_null($this->following()->where('follower_id', $user->id)->first());
        }
}

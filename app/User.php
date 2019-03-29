<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
// use Spatie\MediaLibrary\HasMedia\HasMedia;
// use Spatie\MediaLibrary\Models\Media;
 // implements        HasMedia

class User extends Authenticatable
 {
    use Notifiable;
    // use HasMediaTrait;
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
    // public function followers()
    // {
    //     return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id')->withTimestamps();
    // }
    //
    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    //  */
    // public function followings()
    // {
    //     return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id')->withTimestamps();
    // }
    public function following()
{
   return $this->belongsToMany(User::class, following, user_id, follower_id);
}
    public function tweets(){

   return $this->hasMany(Tweet::class);
    }
    public function getRouteKeyName(){

   return 'name';
    }

    public function getProfileLinkAttribute(){
        return route('user.show', $this);
    }
    public function isNot($user)
{
    return $this->id !== $user->id;
}

public function isFollowing($user)
{
    return (bool) $this->following->where('id', $user->id)->count();
}

public function canFollow($user)
{
    if(!$this->isNot($user)) {
        return false;
    }
    return !$this->isFollowing($user);
    }

public function canUnFollow($user)
{
    return $this->isFollowing($user);

}
// public function registerMediaConversions(Media $media = null)
// {
//     $this->addMediaConversion('thumb')
//         ->width(60)
//         ->height(60);
//     }
}

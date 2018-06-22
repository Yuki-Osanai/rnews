<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function favoritings()
    {
        return $this->belongsToMany(User::class, 'user_favorite', 'user_id', 'favorite_id')->withTimestamps();
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'user_favorite', 'favorite_id', 'user_id')->withTimestamps();
    }
    
    public function favorite($userId)
{
    // 既にフォローしているかの確認
    $exist = $this->is_favoriting($userId);
    // 自分自身ではないかの確認
    $its_me = $this->id == $userId;

    if ($exist || $its_me) {
        // 既にフォローしていれば何もしない
        return false;
    } else {
        // 未フォローであればフォローする
        $this->favoritings()->attach($userId);
        return true;
    }
}

    public function unfavorite($userId)
    {
    // 既にフォローしているかの確認
    $exist = $this->is_favoriting($userId);
    // 自分自身ではないかの確認
    $its_me = $this->id == $userId;

    if ($exist && !$its_me) {
        // 既にフォローしていればフォローを外す
        $this->favoritings()->detach($userId);
        return true;
    } else {
        // 未フォローであれば何もしない
        return false;
    }
    }

    public function is_favoriting($userId) {
    return $this->favoritings()->where('favorite_id', $userId)->exists();
}
}

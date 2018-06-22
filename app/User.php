<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function newsposts()
    {
        return $this->hasMany(Newspost::class);
    }
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
    // 既にお気に入りしているかの確認
    $exist = $this->is_favoriting($userId);
    // 自分自身ではないかの確認
    $its_me = $this->id == $userId;

    if ($exist || $its_me) {
        // 既にお気に入りしていれば何もしない
        return false;
    } else {
        // 未お気に入りであればお気に入りする
        $this->favoritings()->attach($userId);
        return true;
    }
    }

    public function unfavorite($userId)
    {
    // 既にお気に入りしているかの確認
    $exist = $this->is_favoriting($userId);
    // 自分自身ではないかの確認
    $its_me = $this->id == $userId;

    if ($exist && !$its_me) {
        // 既にお気に入りしていればお気に入りを外す
        $this->favoritings()->detach($userId);
        return true;
    } else {
        // 未お気に入りであれば何もしない
        return false;
    }
    }
    

    public function is_favoriting($userId) {
    return $this->favoritings()->where('favorite_id', $userId)->exists();
    }
}

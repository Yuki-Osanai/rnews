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

    public function favorites()
    {
        return $this->belongsToMany(Newspost::class, 'user_favorite', 'user_id', 'favorite_id')->withTimestamps();
    }
    
    public function favorite($newspostId)
    {
    // 既にお気に入りしているかの確認
    $exist = $this->is_favorites($newspostId);
    // // 自分自身ではないかの確認
    // $its_me = $this->id == $userId;

    if ($exist) {
        // 既にお気に入りしていれば何もしない
        return false;
    } else {
        // 未お気に入りであればお気に入りする
        $this->favorites()->attach($newspostId);
        return true;
    }
    }

    public function unfavorite($newspostId)
    {
    // 既にお気に入りしているかの確認
    $exist = $this->is_favorites($newspostId);
    // // 自分自身ではないかの確認
    // $its_me = $this->id == $userId;

    if ($exist) {
        // 既にお気に入りしていればお気に入りを外す
        $this->favorites()->detach($newspostId);
        return true;
    } else {
        // 未お気に入りであれば何もしない
        return false;
    }
    }
    

    public function is_favorites($newspostId) {
    return $this->favorites()->where('favorite_id', $newspostId)->exists();
    }
}
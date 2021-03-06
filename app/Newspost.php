<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newspost extends Model
{
    protected $fillable = ['content', 'user_id','title','url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

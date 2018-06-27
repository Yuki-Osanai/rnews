<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'comment_id'];

    public function newspost()
    {
        return $this->belongsTo(Newspost::class);
    }
}

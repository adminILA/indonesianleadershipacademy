<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
class Blog extends Model
{
    protected $fillable = [
        'blog_title', 'blog_author', 'body', 'blog_source'
    ];

    public function blog_author(){
        return $this->belongsTo('App\User', 'blog_author');
    }
}

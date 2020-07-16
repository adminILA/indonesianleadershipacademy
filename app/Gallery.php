<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  protected $fillable = [
      'image_title', 'image_url', 'image_author', 'caption'
  ];

  public function blog_author(){
      return $this->belongsTo('App\User', 'image_author');
  }
}

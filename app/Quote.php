<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
      'quote_title', 'quote_author', 'quote_image', 'quote_desc', 'quote_owner', 'main_quotes'
    ];
    
    public function quote_author(){
      return $this->belongsTo('App\User', 'quote_author');
    }
}

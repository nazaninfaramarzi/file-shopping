<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $fillable = [
      'user_id', 'demo', 'body',
  ];
  public function user(){
    return $this->belongsTo(User::class);
  }
}

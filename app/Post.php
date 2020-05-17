<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model
{

  protected $fillable = [
      'title', 'category_id', 'content', 'featured', 'slug','user_id',
  ];
  use softDeletes;
  protected $dates=['deleted_at'];

  public function getFeaturedAttribute($featured)
{
    return asset($featured);
}

  public function category()
{
    return $this->belongsTo('App\Category');
}



public function user()
{
  return $this->belongsTo('App\User');
}

public function tags()
{
   return $this->belongsToMany('App\Tag');
}


}

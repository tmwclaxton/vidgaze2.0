<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','post_id','body']; //what can users change
    public function post() { //laravel assumes id is post_id
        //hasOne, hasMany, belongsTo , belongsMany
        return $this->belongsTo(Post::class);
      }
      public function author() { //here we have to be precise
        //hasOne, hasMany, belongsTo , belongsMany
        return $this->belongsTo(User::class,'user_id');
      }

}

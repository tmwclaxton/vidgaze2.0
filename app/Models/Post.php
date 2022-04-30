<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','excerpt','body','category_id','slug']; //what can users change
    //  protected $guarded = ['id'];


    //an alternative method to deciding in the route web file
    public function getRouteKeyName()
    {
      return 'slug'; 
    }

    public function category() {
      //hasOne, hasMany, belongsTo , belongsMany
      return $this->belongsTo(Category::class);
    }
    public function user() {
      //hasOne, hasMany, belongsTo , belongsMany
      return $this->belongsTo(User::class);
    }
}

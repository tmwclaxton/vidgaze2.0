<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','excerpt','body','category_id','slug']; //what can users change
    //  protected $guarded = ['id'];

    protected $with = ['category','author']; //this means relationship are pre-loaded and avoids n+1 problem

    //an alternative method to deciding in the route web file
    public function getRouteKeyName()
    {
      return 'slug';
    }

    //Post::newQuery()->filter()
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query,$search) {
            $query->where('title','like','%'.request('search').'%')
            ->orWhere('body','like','%'.request('search').'%');
        });
    }


    public function category() {//assumes foreign key is category_id
      //hasOne, hasMany, belongsTo , belongsMany
      return $this->belongsTo(Category::class);
    }
    public function author() {
      //hasOne, hasMany, belongsTo , belongsMany
      return $this->belongsTo(User::class,'user_id');
    }

}

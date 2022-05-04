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
        $query->when($filters['search'] ?? false, fn($query,$search) =>
            $query->where(fn($query) =>
                $query->where('title','like','%'.$search.'%')
                ->orWhere('body','like','%'.$search.'%'))
        );

        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereExists(fn($query)=>
                    $query->from('categories')
                    ->whereColumn('categories.id' , 'posts.category_id')
                    ->where('categories.slug',$category))
        );

        // ^ & below same result
        $query->when($filters['author'] ?? false, fn($query, $authors) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username',$authors)
            )
        );
    }


    public function category() {//assumes foreign key is category_id
      //hasOne, hasMany, belongsTo , belongsMany
      return $this->belongsTo(Category::class);
    }
    public function author() {
      //hasOne, hasMany, belongsTo , belongsMany
      return $this->belongsTo(User::class,'user_id');
    }
    public function comments() {
        //hasOne, hasMany, belongsTo , belongsMany
        return $this->hasMany(Comment::class)->orderBy('id','desc');
      }

}

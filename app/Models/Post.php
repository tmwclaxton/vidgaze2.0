<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','excerpt','body']; //what can users change
    //  protected $guarded = ['id'];


    //an alternative method to deciding in the route web file
    public function getRouteKeyName()
    {
      return 'slug'; 
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model implements SluggableInterface
{
    use Sluggable;

    protected $sluggable = [
        'build_from'    =>    'title',
        'save_to'       =>    'slug'
    ];

    protected $table = "articles";

    protected $fillable = ['title', 'content', 'category_id', 'users_id'];

    public function category()
    {
    	//una relacion de muchos a uno se hace con belongsTo
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function image()
    {
        return $this->hasMany('App\Image');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}

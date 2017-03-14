<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    protected $guarded = [];

    public function category() {

    	return $this->belongsTo(Category::class);
    	
    }

    public function comments() {

    	return $this->hasMany(Comment::class);
    	
    }

    public function tags() {

    	return $this->belongsToMany(Tag::class);
    	
    }

    public function user() {

        return $this->belongsTo(User::class);
        
    }
}




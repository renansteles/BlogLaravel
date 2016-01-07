<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    public function posts(){ //acessar o post
        return $this->belongsToMany('App\Post','posts_tags');
    }
}

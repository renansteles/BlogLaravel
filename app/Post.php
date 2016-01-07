<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'content',
    ];
    public function comments(){
        return $this->hasMany('App\Comment'); //os posts tem muitos comentarios
    }

    //acessar as tags atraves da tabela de posts
    public function tags(){
        return $this->belongsToMany('App\Tag','posts_tags'); //ele entende que tem muitas tags para esse post, e o posts_tag é quem faz o relacionamento
    }
}

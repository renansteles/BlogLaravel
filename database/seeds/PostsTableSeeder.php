<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Pode ser assim \App\Post:: importar e colocar la em cima use App\Post
        Post::truncate(); //serve para apagar todos os registros da tabela do db
        factory('App\Post',3)->create(); //quando rodar o db:seed no artisan cria N post pro blog

    }
}

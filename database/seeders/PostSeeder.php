<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();
        $post->title = 'TitUlO DE pruEbA 1';
        $post->content = 'contenido de prueba 1';
        $post->category = 'categoria de prueba 1';

        $post->save();

        $post = new Post();
        $post->title = 'TitUlO DE pruEbA 2';
        $post->content = 'contenido de prueba 2';
        $post->category = 'categoria de prueba 2';

        $post->save();
    }
}

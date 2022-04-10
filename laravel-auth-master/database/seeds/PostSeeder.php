<?php

use Illuminate\Database\Seeder;
use \App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->title = $faker->text(30);
            $post->content = $faker->paragraphs(5, true);
            $post->image = ('https://picsum.photos/50/50');
            $post->slug = Str::slug($post->title, '-');
            $post->save();
        }
    }
}

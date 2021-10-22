<?php

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Faker\Database as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* $posts = [
            ["title" => "Il mio terzo post", "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam porttitor rutrum dapibus. Duis sit amet fringilla leo, gravida gravida leo. Sed viverra lacus id dolor lacinia ultrices. Vivamus dictum congue ante, nec scelerisque sapien consequat volutpat. Nunc quis feugiat mauris. Proin purus risus, semper et aliquet non, euismod sit amet nunc. Curabitur at sollicitudin metus. Sed ac ex id massa feugiat placerat at sed lacus. Mauris mi nisi, ultricies non tortor vel, vulputate laoreet justo. Sed eu est non risus volutpat viverra. Nullam ornare venenatis sodales. Curabitur eleifend erat in massa pulvinar pharetra. Proin id nulla id metus vestibulum interdum. Phasellus a malesuada mauris, ac gravida mi. Quisque congue a quam quis posuere. Pellentesque eget placerat turpis, non interdum ipsum.

            Cras purus ante, auctor quis nulla id, hendrerit dictum dui. Vivamus posuere enim vitae lorem volutpat sollicitudin. Donec accumsan mauris ut libero finibus, vitae semper lectus hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut tincidunt sollicitudin felis et aliquet. Proin vel pulvinar quam. Etiam mollis rhoncus mattis. Phasellus fringilla quis justo in facilisis. Cras et felis dolor. Duis nulla purus, sodales a nulla sed, vulputate suscipit lacus. Ut magna diam, porta vel magna dignissim, tempus placerat libero. Pellentesque nunc nisi, molestie eu velit non, accumsan bibendum lectus. Aliquam pharetra sodales orci, et consectetur metus gravida non.", "image" => "",],

            ["title" => "Il mio quarto post", "content" => "Cras purus ante, auctor quis nulla id, hendrerit dictum dui. Vivamus posuere enim vitae lorem volutpat sollicitudin. Donec accumsan mauris ut libero finibus, vitae semper lectus hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut tincidunt sollicitudin felis et aliquet. Proin vel pulvinar quam. Etiam mollis rhoncus mattis. Phasellus fringilla quis justo in facilisis. Cras et felis dolor. Duis nulla purus, sodales a nulla sed, vulputate suscipit lacus. Ut magna diam, porta vel magna dignissim, tempus placerat libero. Pellentesque nunc nisi, molestie eu velit non, accumsan bibendum lectus. Aliquam pharetra sodales orci, et consectetur metus gravida non.", "image" => "",],
        ];

        foreach ($posts as $post) {
            $newPost = new Post();

            $newPost->title = $post["title"];
            $newPost->content = $post["content"];
            $newPost->image = $post["image"];
            $newPost->slug = Str::slug($newPost->title, "-");

            $newPost->save();
        } */
    }
}

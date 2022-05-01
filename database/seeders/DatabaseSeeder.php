<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Category::truncate();
        Post::truncate();


        $user = User::factory()->create([
            'name' => 'Jon Doe'
        ]);
        Post::factory(10)->create([
            'user_id' => $user->id 
        ]);

        // $user = \App\Models\User::factory()->create();
        //\App\Models\Category::factory(5)->create();
        //\App\Models\Post::factory(5)->create();

        // $personal = Category::create([
        //     'name'=> 'Personal',
        //     'slug'=> 'personal'
        //  ]);
        // $family = Category::create([
        //     'name'=> 'Family',
        //     'slug'=> 'family'
        // ]);
        // $sports = Category::create([
        //     'name'=> 'Sports',
        //     'slug'=> 'sports'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $sports->id,
        //     'title'=> 'BCC Sports football match',
        //     'slug'=> 'bbc-news-post',
        //     'excerpt' => '<p>Et eiusmod aliquip in exercitation proident commodo consequat reprehenderit voluptate reprehenderit.</p></p>',
        //     'body' => '<p>Adipisicing pariatur ea aliqua ea occaecat mollit culpa eu mollit exercitation ipsum do mollit. Ex consectetur consectetur nisi pariatur. Voluptate do non ipsum ex aliquip qui incididunt. Dolore consectetur irure sint occaecat dolore ullamco et mollit pariatur quis fugiat aliqua consequat.
        //                 Nulla reprehenderit nulla cillum magna fugiat minim. Ex ex ex labore cupidatat non fugiat quis ut nostrud consequat eiusmod proident sint irure. Duis ullamco ea dolor commodo cillum veniam enim. Enim excepteur in incididunt enim incididunt laboris sunt.</p>'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title'=> 'Family unit',
        //     'slug'=> 'family-post',
        //     'excerpt' => '<p>Et eiusmod aliquip in exercitation proident commodo consequat reprehenderit voluptate reprehenderit.</p></p>',
        //     'body' => '<p>Adipisicing pariatur ea aliqua ea occaecat mollit culpa eu mollit exercitation ipsum do mollit. Ex consectetur consectetur nisi pariatur. Voluptate do non ipsum ex aliquip qui incididunt. Dolore consectetur irure sint occaecat dolore ullamco et mollit pariatur quis fugiat aliqua consequat.
        //                 Nulla reprehenderit nulla cillum magna fugiat minim. Ex ex ex labore cupidatat non fugiat quis ut nostrud consequat eiusmod proident sint irure. Duis ullamco ea dolor commodo cillum veniam enim. Enim excepteur in incididunt enim incididunt laboris sunt.</p>'
        // ]);

    }
}

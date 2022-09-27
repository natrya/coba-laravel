<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\Category;
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
        User::factory(5)->create();
        Post::factory(20)->create();
        Role::factory(5)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name'=>'Ryan Fabella',
        //     'email'=>'ryanthe@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);
        // User::create([
        //     'name'=>'Millardi mahardhika',
        //     'email'=>'mdhika@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);
        Category::create([
            'name'=> 'Web Programming',
            'slug'=>'web-programming'
        ]);
        Category::create([
            'name'=> 'Personal',
            'slug'=>'personal'
        ]);
        // Post::create([
        //     'title'=>'Posting pertama',
        //     'slug'=>'posting-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla optio est numquam repellendus neque vero laboriosam perspiciatis doloremque! Libero est corporis aliquid sit deleniti tenetur',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla optio est numquam repellendus neque vero laboriosam perspiciatis doloremque! Libero est corporis aliquid sit deleniti tenetur odio laudantium recusandae nihil. Molestias eum officia fuga quis blanditiis aspernatur ipsum laborum facere, obcaecati est ratione, quasi aliquid, commodi unde. Molestias quis perferendis dolorum, incidunt, architecto porro quia dignissimos quae similique quasi quod. Modi error sequi quae eius necessitatibus deserunt quisquam animi veniam. Perferendis est amet in autem officia harum consectetur eius tempore, laboriosam fuga. Sequi quae dignissimos ipsum. Deserunt et exercitationem neque nihil animi eius unde iure nesciunt, dicta asperiores provident quae error.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Posting kedua',
        //     'slug'=>'posting-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit kedua',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla optio est numquam repellendus neque vero laboriosam perspiciatis doloremque! Libero est corporis aliquid sit deleniti tenetur odio laudantium recusandae nihil. Molestias eum officia fuga quis blanditiis aspernatur ipsum laborum facere, obcaecati est ratione, quasi aliquid, commodi unde. Molestias quis perferendis dolorum, incidunt, architecto porro quia dignissimos quae similique quasi quod. Modi error sequi quae eius necessitatibus deserunt quisquam animi veniam. Perferendis est amet in autem officia harum consectetur eius tempore, laboriosam fuga. Sequi quae dignissimos ipsum. Deserunt et exercitationem neque nihil animi eius unde iure nesciunt, dicta asperiores provident quae error.',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);
        // Post::create([
        //     'title'=>'Posting ketiga',
        //     'slug'=>'posting-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit ketiga',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla optio est numquam repellendus neque vero laboriosam perspiciatis doloremque! Libero est corporis aliquid sit deleniti tenetur odio laudantium recusandae nihil. Molestias eum officia fuga quis blanditiis aspernatur ipsum laborum facere, obcaecati est ratione, quasi aliquid, commodi unde. Molestias quis perferendis dolorum, incidunt, architecto porro quia dignissimos quae similique quasi quod. Modi error sequi quae eius necessitatibus deserunt quisquam animi veniam. Perferendis est amet in autem officia harum consectetur eius tempore, laboriosam fuga. Sequi quae dignissimos ipsum. Deserunt et exercitationem neque nihil animi eius unde iure nesciunt, dicta asperiores provident quae error.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
    }
}

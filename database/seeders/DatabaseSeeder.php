<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        
        User::create([
            'name' => 'Bagus Fary Ananta',
            'username' => 'bagus',
            'email' => 'bagus@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Rananda Nur Aisa',
            'username' => 'rananda',
            'email' => 'rananda@gmail.com',
            'password' => bcrypt('12345')
        ]);

        //User::factory(3)->create();

        Category::create([
            'name' => 'GPU',
            'slug' => 'gpu'
        ]);

        Category::create([
            'name' => 'CPU',
            'slug' => 'cpu'
        ]);

        Category::create([
            'name' => 'RAM',
            'slug' => 'ram'
        ]);

        Category::create([
            'name' => 'Monitor',
            'slug' => 'monitor'
        ]);



        


        //Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eius magni',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eius magni accusamus aut cumque natus quam dolores nobis aspernatur, esse amet veritatis. Assumenda quis unde modi qui laborum odit cupiditate perferendis non possimus dolore? Ea magnam cum, delectus tempore voluptate ducimus accusantium quas voluptas perferendis labore fuga fugiat voluptatibus. Aliquid unde, inventore harum rem non, cum cumque sapiente culpa magnam deserunt, beatae nemo ullam. Quam quas et commodi laboriosam debitis perspiciatis earum tempore non tenetur cupiditate quisquam, in officiis, praesentium voluptate pariatur alias molestiae consequatur animi possimus eveniet? Saepe necessitatibus, iste nesciunt cupiditate sed soluta minus perspiciatis velit. Earum, maiores!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eius magni',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eius magni accusamus aut cumque natus quam dolores nobis aspernatur, esse amet veritatis. Assumenda quis unde modi qui laborum odit cupiditate perferendis non possimus dolore? Ea magnam cum, delectus tempore voluptate ducimus accusantium quas voluptas perferendis labore fuga fugiat voluptatibus. Aliquid unde, inventore harum rem non, cum cumque sapiente culpa magnam deserunt, beatae nemo ullam. Quam quas et commodi laboriosam debitis perspiciatis earum tempore non tenetur cupiditate quisquam, in officiis, praesentium voluptate pariatur alias molestiae consequatur animi possimus eveniet? Saepe necessitatibus, iste nesciunt cupiditate sed soluta minus perspiciatis velit. Earum, maiores!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eius magni',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eius magni accusamus aut cumque natus quam dolores nobis aspernatur, esse amet veritatis. Assumenda quis unde modi qui laborum odit cupiditate perferendis non possimus dolore? Ea magnam cum, delectus tempore voluptate ducimus accusantium quas voluptas perferendis labore fuga fugiat voluptatibus. Aliquid unde, inventore harum rem non, cum cumque sapiente culpa magnam deserunt, beatae nemo ullam. Quam quas et commodi laboriosam debitis perspiciatis earum tempore non tenetur cupiditate quisquam, in officiis, praesentium voluptate pariatur alias molestiae consequatur animi possimus eveniet? Saepe necessitatibus, iste nesciunt cupiditate sed soluta minus perspiciatis velit. Earum, maiores!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eius magni',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi eius magni accusamus aut cumque natus quam dolores nobis aspernatur, esse amet veritatis. Assumenda quis unde modi qui laborum odit cupiditate perferendis non possimus dolore? Ea magnam cum, delectus tempore voluptate ducimus accusantium quas voluptas perferendis labore fuga fugiat voluptatibus. Aliquid unde, inventore harum rem non, cum cumque sapiente culpa magnam deserunt, beatae nemo ullam. Quam quas et commodi laboriosam debitis perspiciatis earum tempore non tenetur cupiditate quisquam, in officiis, praesentium voluptate pariatur alias molestiae consequatur animi possimus eveniet? Saepe necessitatibus, iste nesciunt cupiditate sed soluta minus perspiciatis velit. Earum, maiores!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}


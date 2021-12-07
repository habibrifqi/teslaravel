<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

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
            'name' => 'habib rifqi',
            'username' => 'rifqi error',
            'email' => 'bloodlast098@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();
        // User::create([
        //     'name' => 'rifqi error',
        //     'email' => 'rifqi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Technology',
            'slug' => 'Programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Category::create([
            'name' => 'Game',
            'slug' => 'Game'
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'title' => 'judul pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora commodi laborum facilis enim qui laudantium corporis quas, magni expedita porro nostrum ullam quaerat illo obcaecati recusandae fuga quod nulla repellat ab unde. Error nihil, dolorem eos perspiciatis dolor vero nam unde hic iusto. Itaque hic sequi voluptate corporis consequatur.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam sed asperiores facilis culpa magnam voluptatibus maxime tempora, laboriosam suscipit quia ut consequatur fugit autem? Esse expedita nostrum unde, commodi reprehenderit dolores cupiditate laborum corrupti, illo dignissimos non! Dolor, cum esse excepturi tempore doloribus id qui explicabo temporibus, aliquid nesciunt dolorum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolor porro dolores expedita, omnis blanditiis reiciendis neque autem perspiciatis quo a maiores laborum, totam inventore quos eveniet doloribus at deleniti architecto sit tempore consectetur. Quae odio omnis nemo consectetur consequuntur ut. Error cum quod autem labore debitis laboriosam necessitatibus iure?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatum ullam sed libero modi nemo obcaecati quisquam error aut tempora cupiditate similique dolore sunt a quas odit, optio doloribus fugiat eum doloremque explicabo! Aspernatur odio deleniti ut, architecto id fuga temporibus, rerum sit tenetur nisi aliquid omnis! Iusto, culpa officiis?</p>'
        // ]);

        // Post::create([
        //     'title' => 'judul kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora commodi laborum facilis enim qui laudantium corporis quas, magni expedita porro nostrum ullam quaerat illo obcaecati recusandae fuga quod nulla repellat ab unde. Error nihil, dolorem eos perspiciatis dolor vero nam unde hic iusto. Itaque hic sequi voluptate corporis consequatur.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam sed asperiores facilis culpa magnam voluptatibus maxime tempora, laboriosam suscipit quia ut consequatur fugit autem? Esse expedita nostrum unde, commodi reprehenderit dolores cupiditate laborum corrupti, illo dignissimos non! Dolor, cum esse excepturi tempore doloribus id qui explicabo temporibus, aliquid nesciunt dolorum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolor porro dolores expedita, omnis blanditiis reiciendis neque autem perspiciatis quo a maiores laborum, totam inventore quos eveniet doloribus at deleniti architecto sit tempore consectetur. Quae odio omnis nemo consectetur consequuntur ut. Error cum quod autem labore debitis laboriosam necessitatibus iure?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatum ullam sed libero modi nemo obcaecati quisquam error aut tempora cupiditate similique dolore sunt a quas odit, optio doloribus fugiat eum doloremque explicabo! Aspernatur odio deleniti ut, architecto id fuga temporibus, rerum sit tenetur nisi aliquid omnis! Iusto, culpa officiis?</p>'
        // ]);

        // Post::create([
        //     'title' => 'judul ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora commodi laborum facilis enim qui laudantium corporis quas, magni expedita porro nostrum ullam quaerat illo obcaecati recusandae fuga quod nulla repellat ab unde. Error nihil, dolorem eos perspiciatis dolor vero nam unde hic iusto. Itaque hic sequi voluptate corporis consequatur.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam sed asperiores facilis culpa magnam voluptatibus maxime tempora, laboriosam suscipit quia ut consequatur fugit autem? Esse expedita nostrum unde, commodi reprehenderit dolores cupiditate laborum corrupti, illo dignissimos non! Dolor, cum esse excepturi tempore doloribus id qui explicabo temporibus, aliquid nesciunt dolorum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolor porro dolores expedita, omnis blanditiis reiciendis neque autem perspiciatis quo a maiores laborum, totam inventore quos eveniet doloribus at deleniti architecto sit tempore consectetur. Quae odio omnis nemo consectetur consequuntur ut. Error cum quod autem labore debitis laboriosam necessitatibus iure?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatum ullam sed libero modi nemo obcaecati quisquam error aut tempora cupiditate similique dolore sunt a quas odit, optio doloribus fugiat eum doloremque explicabo! Aspernatur odio deleniti ut, architecto id fuga temporibus, rerum sit tenetur nisi aliquid omnis! Iusto, culpa officiis?</p>'
        // ]);

        // Post::create([
        //     'title' => 'judul keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tempora commodi laborum facilis enim qui laudantium corporis quas, magni expedita porro nostrum ullam quaerat illo obcaecati recusandae fuga quod nulla repellat ab unde. Error nihil, dolorem eos perspiciatis dolor vero nam unde hic iusto. Itaque hic sequi voluptate corporis consequatur.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam sed asperiores facilis culpa magnam voluptatibus maxime tempora, laboriosam suscipit quia ut consequatur fugit autem? Esse expedita nostrum unde, commodi reprehenderit dolores cupiditate laborum corrupti, illo dignissimos non! Dolor, cum esse excepturi tempore doloribus id qui explicabo temporibus, aliquid nesciunt dolorum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolor porro dolores expedita, omnis blanditiis reiciendis neque autem perspiciatis quo a maiores laborum, totam inventore quos eveniet doloribus at deleniti architecto sit tempore consectetur. Quae odio omnis nemo consectetur consequuntur ut. Error cum quod autem labore debitis laboriosam necessitatibus iure?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatum ullam sed libero modi nemo obcaecati quisquam error aut tempora cupiditate similique dolore sunt a quas odit, optio doloribus fugiat eum doloremque explicabo! Aspernatur odio deleniti ut, architecto id fuga temporibus, rerum sit tenetur nisi aliquid omnis! Iusto, culpa officiis?</p>'
        // ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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
    User::create([
      'name' => 'Paly ramnan',
      'username' => 'palyramnan',
      'email' => 'ramnan@gmail.com',
      'password' => bcrypt('12345')
    ]);

    User::factory(3)->create();


    Category::create([
      'name' => 'Web Programming',
      'slug' => 'web-programming'
    ]);
    Category::create([
      'name' => 'Web Design',
      'slug' => 'web-design'
    ]);
    Category::create([
      'name' => 'Personal',
      'slug' => 'personal'
    ]);


    Post::factory(20)->create();

    // Post::create([
    //     'title' => 'Judul Post Pertama',
    //     'category_id' => 1,
    //     'user_id' => 1,
    //     'slug' => 'judul-post-ppertama',
    //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas temporibus aspernatur quibusdam voluptates facilis quisquam nam, eveniet eum, est corporis quos at laboriosam.',
    //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas temporibus aspernatur quibusdam voluptates facilis quisquam nam, eveniet eum, est corporis quos at laboriosam. Laborum perspiciatis culpa, odit delectus beatae doloribus iure similique debitis provident nam suscipit minus animi et nisi placeat facilis facere commodi illum fugit explicabo quisquam dolore nulla quia laboriosam.</p><p> Ut a necessitatibus nostrum aperiam distinctio enim sunt quod obcaecati eveniet quaerat autem quae quos dicta fugiat molestias exercitationem totam cupiditate libero, reiciendis iste adipisci sint eligendi amet temporibus? Mollitia odio at reiciendis sapiente quibusdam eligendi porro repellat adipisci tenetur vitae delectus enim magnam quas, praesentium minus laboriosam?</p>'
    // ]);
    // Post::create([
    //     'title' => 'Judul Post Kedua',
    //     'category_id' => 1,
    //     'user_id' => 1,
    //     'slug' => 'judul-post-Kedua',
    //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas temporibus aspernatur quibusdam voluptates facilis quisquam nam, eveniet eum, est corporis quos at laboriosam.',
    //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas temporibus aspernatur quibusdam voluptates facilis quisquam nam, eveniet eum, est corporis quos at laboriosam. Laborum perspiciatis culpa, odit delectus beatae doloribus iure similique debitis provident nam suscipit minus animi et nisi placeat facilis facere commodi illum fugit explicabo quisquam dolore nulla quia laboriosam.</p><p> Ut a necessitatibus nostrum aperiam distinctio enim sunt quod obcaecati eveniet quaerat autem quae quos dicta fugiat molestias exercitationem totam cupiditate libero, reiciendis iste adipisci sint eligendi amet temporibus? Mollitia odio at reiciendis sapiente quibusdam eligendi porro repellat adipisci tenetur vitae delectus enim magnam quas, praesentium minus laboriosam?</p>'
    // ]);
    // Post::create([
    //     'title' => 'Judul Post Ketiga',
    //     'category_id' => 2,
    //     'user_id' => 1,
    //     'slug' => 'judul-post-ketiga',
    //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas temporibus aspernatur quibusdam voluptates facilis quisquam nam, eveniet eum, est corporis quos at laboriosam.',
    //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas temporibus aspernatur quibusdam voluptates facilis quisquam nam, eveniet eum, est corporis quos at laboriosam. Laborum perspiciatis culpa, odit delectus beatae doloribus iure similique debitis provident nam suscipit minus animi et nisi placeat facilis facere commodi illum fugit explicabo quisquam dolore nulla quia laboriosam.</p><p> Ut a necessitatibus nostrum aperiam distinctio enim sunt quod obcaecati eveniet quaerat autem quae quos dicta fugiat molestias exercitationem totam cupiditate libero, reiciendis iste adipisci sint eligendi amet temporibus? Mollitia odio at reiciendis sapiente quibusdam eligendi porro repellat adipisci tenetur vitae delectus enim magnam quas, praesentium minus laboriosam?</p>'
    // ]);

  }
}

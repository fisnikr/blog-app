<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

       $personal = Category::create([
        'name' => 'Personal',
        'slug' => 'personal'
       ]);

       $work = Category::create([
        'name' => 'Work',
        'slug' => 'work'
       ]);

       $hobby = Category::create([
        'name' => 'Hobby',
        'slug' => 'hobby'
       ]);


       Post::create([
        'user_id' => $user->id,
        'category_id' => $work->id,
        'title' => 'Work Post',
        'slug' => 'first-post',
        'excerpt' => 'Lorem ipsum dolar sit amet.',
        'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam neque arcu, rhoncus non consectetur a, porttitor at magna. Pellentesque at diam orci. Morbi at ullamcorper orci. Phasellus imperdiet metus erat. Suspendisse nec tellus risus. Nulla facilisi. Sed pharetra consectetur odio, a gravida purus malesuada eget. Proin imperdiet rhoncus libero, id dignissim nulla lacinia ut. Nam porttitor eget ligula lobortis tincidunt. Mauris eleifend pharetra vulputate. Fusce in maximus arcu. Cras ultricies, tellus eu pharetra viverra, augue ligula pharetra mauris, non pellentesque urna orci sed turpis. Mauris ac gravida diam. Integer maximus sapien lacus, eu tempor tortor cursus non. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>'
       ]);

       Post::create([
        'user_id' => $user->id,
        'category_id' => $personal->id,
        'title' => 'Personal Post',
        'slug' => 'second-post',
        'excerpt' => 'Lorem ipsum dolar sit amet.',
        'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam neque arcu, rhoncus non consectetur a, porttitor at magna. Pellentesque at diam orci. Morbi at ullamcorper orci. Phasellus imperdiet metus erat. Suspendisse nec tellus risus. Nulla facilisi. Sed pharetra consectetur odio, a gravida purus malesuada eget. Proin imperdiet rhoncus libero, id dignissim nulla lacinia ut. Nam porttitor eget ligula lobortis tincidunt. Mauris eleifend pharetra vulputate. Fusce in maximus arcu. Cras ultricies, tellus eu pharetra viverra, augue ligula pharetra mauris, non pellentesque urna orci sed turpis. Mauris ac gravida diam. Integer maximus sapien lacus, eu tempor tortor cursus non. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>'
       ]);

       Post::create([
        'user_id' => $user->id,
        'category_id' => $hobby->id,
        'title' => 'Hobby Post',
        'slug' => 'third-post',
        'excerpt' => 'Lorem ipsum dolar sit amet.',
        'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam neque arcu, rhoncus non consectetur a, porttitor at magna. Pellentesque at diam orci. Morbi at ullamcorper orci. Phasellus imperdiet metus erat. Suspendisse nec tellus risus. Nulla facilisi. Sed pharetra consectetur odio, a gravida purus malesuada eget. Proin imperdiet rhoncus libero, id dignissim nulla lacinia ut. Nam porttitor eget ligula lobortis tincidunt. Mauris eleifend pharetra vulputate. Fusce in maximus arcu. Cras ultricies, tellus eu pharetra viverra, augue ligula pharetra mauris, non pellentesque urna orci sed turpis. Mauris ac gravida diam. Integer maximus sapien lacus, eu tempor tortor cursus non. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>'
       ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

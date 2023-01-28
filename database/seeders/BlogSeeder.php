<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        //
        $faker = \Faker\Factory::create();

        for($i=0;$i<50; $i++){
            Post::create([
                'title'=> $faker->sentence,
                'content' => $faker->paragraph,
            ]);
        }


    }
}

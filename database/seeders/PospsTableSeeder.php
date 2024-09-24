<?php

namespace Database\Seeders;
use App\Models\Post;
use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;

class PospsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $new_project = new Post();
            $new_project->title = $faker->sentence;
            $new_project->slug = Helper::generateSlug($new_project->title, Post::class);
            $new_project->description = $faker->paragraph();
            $new_project->reading_time = $faker->numberBetween(1, 10);
            //dump($new_project);
            $new_project->save();

        }
    }
}

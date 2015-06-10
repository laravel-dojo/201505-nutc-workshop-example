<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
		DB::table('posts')->truncate();

		$faker = Faker\Factory::create('zh_TW');

        foreach(range(1, 10) as $number) {
        	App\Post::create([
        		'title' => $faker->sentence,
        		'sub_title' => $faker->sentence,
        		'content' => $faker->paragraph,
        		'is_hot' => rand(0, 1),
        		'created_at' => Carbon\Carbon::now()->addDays($number),
				'updated_at' => Carbon\Carbon::now()->addDays($number),
        	]);
        }
    }
}

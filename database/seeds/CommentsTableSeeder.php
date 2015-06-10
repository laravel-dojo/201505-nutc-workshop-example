<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('comments')->truncate();

		$faker = Faker\Factory::create('zh_TW');

        foreach(range(1, 10) as $number) {
        	App\Comment::create([
        		'name' => $faker->name,
        		'email' => $faker->email,
        		'content' => $faker->paragraph,
        		'post_id' => rand(1, 10),
        		'created_at' => Carbon\Carbon::now()->addDays($number),
				'updated_at' => Carbon\Carbon::now()->addDays($number),
        	]);
        }
    }
}

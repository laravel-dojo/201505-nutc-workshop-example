<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
		DB::table('posts')->truncate();

        foreach(range(1, 10) as $number) {
        	App\Post::create([
        		'title' => '測試假文章'.$number,
        		'sub_title' => '這是副標題…',
        		'content' => '這是假的文章內容',
        		'is_hot' => rand(0, 1),
        		'created_at' => Carbon\Carbon::now()->addDays($number),
				'updated_at' => Carbon\Carbon::now()->addDays($number),
        	]);
        }
    }
}

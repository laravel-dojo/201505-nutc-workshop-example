<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('comments')->truncate();

        foreach(range(1, 10) as $number) {
        	App\Comment::create([
        		'name' => '測試假人'.$number,
        		'email' => 'tester@test.com',
        		'content' => '這是假的回覆內容',
        		'post_id' => rand(1, 10),
        		'created_at' => Carbon\Carbon::now()->addDays($number),
				'updated_at' => Carbon\Carbon::now()->addDays($number),
        	]);
        }
    }
}

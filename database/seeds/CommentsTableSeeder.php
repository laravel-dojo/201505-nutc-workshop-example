<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        foreach(range(1, 10) as $number) {
        	App\Comment::create([
        		'name' => '測試假人'.$number,
        		'email' => 'tester@test.com',
        		'content' => '這是假的回覆內容',
        		'post_id' => 1,
        		'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
        	]);
        }
    }
}

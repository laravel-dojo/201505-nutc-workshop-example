<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        foreach(range(1, 10) as $number) {
        	App\Contact::create([
        		'name' => '測試假人'.$number,
        		'email' => 'tester@test.com',
        		'message' => '這是假的訊息內容',
        		'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
        	]);
        }
    }
}

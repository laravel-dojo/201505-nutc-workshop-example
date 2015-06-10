<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('contacts')->truncate();

    	$faker = Faker\Factory::create('zh_TW');

        foreach(range(1, 10) as $number) {
        	App\Contact::create([
        		'name' => $faker->name,
        		'email' => $faker->email,
        		'message' => $faker->paragraph,
        		'created_at' => Carbon\Carbon::now()->addDays($number),
				'updated_at' => Carbon\Carbon::now()->addDays($number),
        	]);
        }
    }
}

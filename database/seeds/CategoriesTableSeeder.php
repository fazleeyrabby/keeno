<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// \App\Categories::create([
    	// 	'name' => 'Samsang',
    	// 	'images_url' => 'lena.bmp'
    	// ]);
    	factory(\App\Categories::class, 4)->create();
    }
}

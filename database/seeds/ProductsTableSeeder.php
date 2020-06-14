<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Products::create([
        // 	'title' => 'Samsang',
        // 	'description' => 'Use comments and whitespace to help readability and ease maintenance.',
        // 	'images_url' => 'lena.bmp,lenacolor.png,lena.ppm, Lenaclor.ppm',
        // 	'category_id' => 1,
        // 	'is_featured' => 'yes',
        // 	'price' => '29000',
        // 	'rating' => '0.5'
        // ]);

        factory(\App\Products::class, 10)->create();
    }
}

<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new \App\Product([
        	'imagePath' =>'/img/camera.jpg',
        	'name' => 'Camera',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.',
            'price' => '100',
            'quantity' => '10'

        ]);
        $products->save();
        $products = new \App\Product([
        	'imagePath' =>'/img/dress.jpg',
        	'name' => 'Dress',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.',
            'quantity' => '10',
            'price' => '220'

        ]);
        $products->save();
        $products = new \App\Product([
        	'imagePath' =>'/img/clock.jpg',
        	'name' => 'Clock',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.',
            'quantity' => '10',
            'price' => '150'

        ]);
        $products->save();
        $products = new \App\Product([
        	'imagePath' =>'/img/necklace.jpg',
        	'name' => 'Red Stone Necklace',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.',
            'quantity' => '10',
            'price' => '110'

        ]);
        $products->save();
        $products = new \App\Product([
        	'imagePath' =>'/img/pillow.jpg',
        	'name' => 'Pillow',
        	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.',
            'quantity' => '10',
            'price' => '50'

        ]);
        $products->save();
        $products = new \App\Product([
            'imagePath' =>'/img/blouse.jpg',
            'name' => 'Blouse',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.',
            'quantity' => '10',
            'price' => '50'

        ]);
        $products->save();
        
	}
}
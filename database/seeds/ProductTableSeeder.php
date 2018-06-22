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
      $product = new \App\Product([
        'imagePath' => '/css/2205.jpg',
        'title' => 'Cotton Suit',
        'description' => 'Plain Cotton Silk Abaya Style Suit in Lilac',
        'price' => '199.99',
        'quantity' => '4',
        'category_id' => '1'
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => '/css/2205.jpg',
        'title' => 'Lawn Suit',
        'description' => 'Embroidered Net Abaya Style Suit in Lilac',
        'price' => '249.99',
        'quantity' => '3',
        'category_id' => '1'
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => '/css/2205.jpg',
        'title' => 'Saree Suit',
        'description' => 'Embroidered Chiffon Saree in Beige and Black',
        'price' => '355.99',
        'quantity' => '5',
        'category_id' => '2'
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => '/css/2205.jpg',
        'title' => ' Net Lehenga',
        'description' => 'Embroidered Net Lehenga in Navy Blue',
        'price' => '399.99',
        'quantity' => '2',
        'category_id' => '1'
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => '/css/2205.jpg',
        'title' => 'Georgette Suit',
        'description' => 'Embroidered Net Abaya Style Suit in Light Grey',
        'price' => '599.99',
        'quantity' => '3',
        'category_id' => '2'
      ]);
      $product->save();
    }
}

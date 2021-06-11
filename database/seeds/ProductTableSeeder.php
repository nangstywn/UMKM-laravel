<?php

use App\Product;
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
        //
        $products = array(
            array("category_id" => 1 ,"user_id" => 1,"slug" => "shoes-1", "product_name" => "Sepatu", "product_detail" => "Shoes Detail", "email" => "nn@gmail.com", "phone" => "082345678", "address" => "Karangbendo", "maps" => "Masukkan Iframe"),
            array("category_id" => 2, "user_id"=> 1,"slug" => "bags-1", "product_name" => "Tas", "product_detail" => "Bags Detail", "email" => "us@gmail.com", "phone" => "081234567", "address" => "Jl Sukun No 5", "maps" => "Masukkan Iframe")
        );

        foreach ($products as $product)
        {
            Product::create($product);
        }
    }
}
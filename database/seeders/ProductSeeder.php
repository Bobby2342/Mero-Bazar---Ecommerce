<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(


            [

                    'name'=>'Nike Shoe',
                    'price'=>'200',
                    'description'=>'A branded shoe worn by ',
                    'category'=>'mens fashion',
                    'gallery'=>'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/5b0981ff-45f8-40c3-9372-32430a62aaea/dunk-high-womens-shoes-cF9txG.png',

            ],



            [

                    'name'=>'Enya Guitar',
                    'price'=>'20000',
                    'description'=>'A branded Guitar worn by ',
                    'category'=>'mens fashion',
                    'gallery'=>'https://down-ph.img.susercontent.com/file/89c937f1c5328405bfb9a50bd30988ef',



            ],

              [

                    'name'=>'Iphone 14 pro ',
                    'price'=>'200000',
                    'description'=>'A branded Phone worn by ',
                    'category'=>'mens fashion',
                    'gallery'=>'https://adminapi.applegadgetsbd.com/storage/media/large/iPhone-14-Pro-Space-Black-1138.jpg',



            ],



            );
    }
}

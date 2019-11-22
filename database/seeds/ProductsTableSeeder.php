<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\CategoryLv1;
use \App\Enums\ProductColor;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lv1s = CategoryLv1::all();
        $shop = DB::table('shops')->pluck('id');
        $colors = DB::table('colors')->pluck('id');
        $faker = Factory::create();
        $groupProductId = 0;
        foreach($lv1s as $lv1){
            foreach ($lv1->categoriesLv2 as $lv2){
               for ($i=0;$i<50;$i++){
                   $groupProductId++;
                   DB::table('groups_product')->insert([
                       'shop_id' => $faker->randomElement($shop),
                       'category_lv1_id' =>$lv1->id,
                       'category_lv2_id' => $lv2->id,
                       'name' => $lv2->name.' '.$faker->name,
                       'image_1' => $faker->imageUrl(300,400),
                       'image_2' => $faker->imageUrl(300,400),
                       'image_3' => $faker->imageUrl(300,400),
                       'description'=>$faker->text(),
                       'brand' => $faker->name
                   ]);
                   $sampleColors = ProductColor::getValues();
                   $sampleSizes = ['s','m','x','l','xl','xxl'];
                   $numColor =rand(0,6);
                   $numSize =rand(0,5);
                   if($numColor!=0){
                       $colors = array_rand($sampleColors,$numColor+1);
                   }
                   if($numSize!=0){
                       $sizes = array_rand($sampleSizes,$numSize+1);
                   }
                   if($numColor!=0){
                       foreach ($colors as $color){
                           if($numSize!=0){
                               foreach ($sizes as $size){
                                   DB::table('products')->insert([
                                       'group_product_id' => $groupProductId,
                                       'color'=>$sampleColors[$color],
                                       'size' =>$sampleSizes[$size],
                                       'quantity'=>$quantity = rand(50,100),
                                       'quantity_sold'=>$sold = rand(0,$quantity),
                                       'quantity_available'=>$quantity - $sold,
                                       'price'=>rand(5,100000)*10000,
                                       'status'=>rand(0,1)
                                   ]);
                               }
                           }
                           else{
                               DB::table('products')->insert([
                                   'group_product_id' => $groupProductId,
                                   'color'=>$sampleColors[$color],
                                   'quantity'=>$quantity = rand(50,100),
                                   'quantity_sold'=>$sold = rand(0,$quantity),
                                   'quantity_available'=>$quantity - $sold,
                                   'price'=>rand(5,100000)*10000,
                                   'status'=>rand(0,1)
                               ]);
                           }
                       }
                   }
                   else{
                       if($numSize!=0){
                           foreach ($sizes as $size){
                               DB::table('products')->insert([
                                   'group_product_id' => $groupProductId,
                                   'size' =>$sampleSizes[$size],
                                   'quantity'=>$quantity = rand(10,100),
                                   'quantity_sold'=>$sold = rand(0,$quantity),
                                   'quantity_available'=>$quantity - $sold,
                                   'price'=>rand(5,100000)*10000,
                                   'status'=>rand(0,1)
                               ]);
                           }
                       }
                       else{
                           DB::table('products')->insert([
                               'group_product_id' => $groupProductId,
                               'quantity'=>$quantity = rand(50,100),
                               'quantity_sold'=>$sold = rand(0,$quantity),
                               'quantity_available'=>$quantity - $sold,
                               'price'=>rand(5,100000)*10000,
                               'status'=>rand(0,1)
                           ]);
                       }
                   }


               }
            }

        }
    }
}

<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use App\Models\CategoryLv1;

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
        foreach($lv1s as $lv1){
            foreach ($lv1->categoriesLv2 as $lv2){
               for ($i=0;$i<50;$i++){
                   DB::table('groups_product')->insert([
                       'shop_id' => $faker->randomElement($shop),
                       'category_lv1_id' =>$lv1->id,
                       'category_lv2_id' => $lv2->id,
                       'name' => $lv2->name.' '.$faker->name,
                       'image_1' => $faker->imageUrl(300,400),
                       'image_2' => $faker->imageUrl(300,400),
                       'image_3' => $faker->imageUrl(300,400),
                       'description'=>$faker->text(),
                       'price'=>rand(5,100000)*10000,
                       'brand' => $faker->name
                   ]);
                   $numberColor = rand(1,4);
                   for ($j=0; $j<$numberColor;$j++){
                       DB::table('products')->insert([
                           'group_product_id' => $i+1,
                           'color_id' => $faker->randomElement($colors),
                           'quantity'=>$quanity = rand(50,100),
                           'quantity_sold'=>$sold = rand(0,50),
                           'quantity_available'=>$quanity - $sold,
                           'status'=>rand(0,1)
                       ]);
                   }
               }
            }

        }
    }
}

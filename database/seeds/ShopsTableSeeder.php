<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ["Thời Trang","Đồ Chơi","Xe Máy","Mỹ Phẩm","Điện Máy","Gia Dụng"];
        $faker = Factory::create();
        for($i=0;$i<100;$i++){
            DB::table('shops')->insert([
                'user_id' => $i+6,
                'name' =>"Cửa Hàng ". $faker->randomElement($data) ." ".$faker->userName,
                'address_id' => $i+1106,
                'image' => $faker->imageUrl(800,300),
                'phone' => '090'.$faker->randomNumber(7,true),
                'description'=>$faker->text()
            ]);
        }
    }
}

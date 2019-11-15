<?php

use App\Models\Profile;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i=1;$i<=1600;$i++){
            $perProduct = rand(0,10);
            for ($j=0; $j<$perProduct;$j++){
                DB::table('reviews')->insert([
                    'group_product_id' => $i,
                    'user_id' => rand(6,1105),
                    'number_star' => rand(1,5),
                    'comment' => $faker->text,
                ]);
            }

        }

    }
}

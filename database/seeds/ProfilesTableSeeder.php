<?php

use App\Models\Profile;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i=0;$i<1105;$i++){
            DB::table('profiles')->insert([
                'user_id' => $i+1,
                'address_id' => $i+1,
                'avatar' => $faker->imageUrl(200,200),
                'gender' => rand(0,1),
                'birth_day' => $faker->dateTimeBetween('-100 years','-10 years')->format('y-m-d'),
                'phone' => '090'.rand(1000000,9999999)
            ]);
        }

    }
}

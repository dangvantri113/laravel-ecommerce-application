<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        //DB::unprepared(file_get_contents('app/sql/mysql.sql'));
        $provinceIds = DB::table('provinces')->pluck('id');
        for($i=0; $i<1205;$i++){
            DB::table('addresses')->insert([
                'province_id'=>$provinceId = $faker->randomElement($provinceIds),
                'district_id'=>$districtId= $faker->randomElement(DB::table('districts')->where('province_id',$provinceId)->pluck('id')),
                'ward_id' => $faker->randomElement(DB::table('wards')->where('district_id',$districtId)->pluck('id')),
                'detail' => $faker->address
            ]);
        }
    }
}

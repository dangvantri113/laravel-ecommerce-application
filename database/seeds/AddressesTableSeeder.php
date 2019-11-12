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

        DB::unprepared(file_get_contents('app/sql/mysql.sql'));
        $wardIds = DB::table('ward')->pluck('id');
        for($i=0; $i<100;$i++){
            DB::table('addresses')->insert([
                'ward_id' => $faker->randomElement($wardIds),
                'detail' => $faker->address
            ]);
        }
    }
}

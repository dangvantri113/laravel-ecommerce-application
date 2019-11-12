<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Faker\Factory;

class ColorsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = ['Đỏ','Cam','Vàng','Xanh lá','Xanh Dương','Tím','Đen'];
		foreach ($data as $color){
            DB::table('colors')->insert([
                'name'=>$color
            ]);
        }

	}
}

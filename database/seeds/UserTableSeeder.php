<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Faker\Factory;

class UserTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Factory::create();

		$admin = new User();
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('123456');
        $admin->is_admin = true;
        $admin->save();

		for ($i = 0; $i < 4; $i++) {
            $admin = new User();
            $admin->email = 'admin' . $faker->email;
            $admin->password = bcrypt('123456');
            $admin->is_admin = true;
            $admin->save();
		}

		$saler = new User();
		$saler->email = 'seller@example.com';
		$saler->password = bcrypt('123456');
		$saler->save();
		for ($i = 0; $i < 99; $i++) {
			$saler = new User();
			$saler->email = 'seller' . $faker->email;
			$saler->password = bcrypt('123456');
			$saler->save();
		}
		$buyer = new User();
		$buyer->email = 'buyer@example.com';
		$buyer->password = bcrypt('123456');
		$buyer->save();
		for ($i = 0; $i < 999; $i++) {
			$buyer = new User();
			$buyer->email = 'buyer'.$faker->email;
			$buyer->password = bcrypt('123456');
			$buyer->save();
		}
	}
}

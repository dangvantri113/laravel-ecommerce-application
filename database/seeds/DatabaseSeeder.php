<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
		// User seeder will use the roles above created.
		$this->call(UserTableSeeder::class);
		$this->call(AddressesTableSeeder::class);
		$this->call(ProfilesTableSeeder::class);
		$this->call(ShopsTableSeeder::class);
		$this->call(CatagoriesTableSeeder::class);
    }
}

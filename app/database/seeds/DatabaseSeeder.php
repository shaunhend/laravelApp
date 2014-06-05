<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('PeopleTableSeeder');
		$this->call('Product_categoriesTableSeeder');
		$this->call('CompaniesTableSeeder');
	}

}

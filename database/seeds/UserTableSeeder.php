<?php 

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('users')->insert(array(
			'name' => 'Dawin',
			'email' => 'dawin.valenzuela@gmail.com',
			'password' => \Hash::make('secret')
		));
	}
	
}
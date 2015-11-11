<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Blog\User;

class UserTableSeeder extends Seeder{
	
	public function run(){
		User::create(
			[
                'name' => 'Admin Universidad',
                'email' => 'rodriguezjesus609@gmail.com',
                'username'=> 'jrodriguez609',
                'password' => \Hash::make('citizenpanel10*')
			]
		);

	}
}
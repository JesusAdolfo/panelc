<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Blog\Feedback;

class FeedbackTableSeeder extends Seeder{
	
	public function run(){
		Feedback::create(
			[
				'usuario' => 'Jane Bolz',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus voluptate ipsa minus fugit nam. Vero fugit maxime sed doloremque et quas temporibus. Laborum doloribus provident culpa id, animi voluptate facere!'				
			]
		);
		Feedback::create(
			[
				'usuario' => 'Ken Armitage',
				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus voluptate ipsa minus fugit nam. Vero fugit maxime sed doloremque et quas temporibus. Laborum doloribus provident culpa id, animi voluptate facere!'
			]
		);
	}
}
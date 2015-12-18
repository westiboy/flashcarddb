<?php

use Illuminate\Database\Seeder;

class FlashcardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		//$user_id = \App\User::where('last_name','=','Smith')->pluck('id');
	    DB::table('flashcards')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'card_entry' => 'Input Types',
	        'definition_entry' => 'Describes specified type of input in an HTML form',
	        'relation__entry' => 'In a form requiring a phone number, you can define the type as "tel" to specify it as a telephone number',
	        'card_entry_url' => 'http://www.w3schools.com/html/html_form_input_types.asp',
	    ]);

		//$user_id = \App\User::where('last_name','=','Smith')->pluck('id');
	    DB::table('flashcards')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'card_entry' => 'Grouped Buttons',
	        'definition_entry' => 'jQuery Mobile provides an easy way for grouping buttons together.',
	        'relation__entry' => 'Displaying a horizontal group of buttons for the semester in which a class occurs, can be completed with the data-role "controlgroup" and the data-type "horizontal"',
	        'card_entry_url' => 'http://www.w3schools.com/jquerymobile/jquerymobile_buttons.asp#groupedbuttons',
	    ]);

		//$user_id = \App\User::where('last_name','=','Smith')->pluck('id');
	    DB::table('flashcards')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'card_entry' => 'PHP Data Types',
	        'definition_entry' => 'Variables can store data of different types, and different data types can do different things.',
	        'relation__entry' => 'A string can be any text inside quotes. You can use single or double quotes',
	        'card_entry_url' => 'http://www.w3schools.com/php/php_datatypes.asp',
	    ]);
	}
}

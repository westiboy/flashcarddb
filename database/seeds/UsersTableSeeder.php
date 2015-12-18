<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = \App\User::firstOrCreate(['email' => 'aran@arangilmore.com']);
        $user->name = 'gilmofo';
        $user->email = 'aran@arangilmore.com';
        $user->password = \Hash::make('helloworld');
        $user->first_name = 'Aran';
        $user->last_name = 'Gilmore';

        $user = \App\User::firstOrCreate(['email' => 'westiboy@yahoo.com']);
        $user->name = 'westiboy';
        $user->email = 'westiboy@yahoo.com';
        $user->password = \Hash::make('helloworld');
        $user->first_name = 'John';
        $user->last_name = 'Smith';

    }
}

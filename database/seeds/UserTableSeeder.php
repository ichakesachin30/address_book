<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Sachin Ichake',
        'username' => 'sachin',
        'email'    => 'sachin@mail.com',
        'password' => Hash::make('test123'),
    ));
}

}

// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Dr Sevilleja Wiggin',
        'username' => 'DrSevillejaWiggin',
        'email'    => 'saul@nell.co.uk',
        'password' => Hash::make('computer'),
    ));
}

}

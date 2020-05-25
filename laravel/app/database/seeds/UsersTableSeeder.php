<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Add this lines
        User::query()->truncate(); // truncate user table each time of seeders run
        User::create([ // create a admin user
            'email' => 'admin@diri.org.bd',
            'password' => Hash::make('admin123$'),
            'name' => 'Administrator'
        ]);

        User::create([ // create a general user
            'email' => 'user@diri.org.bd',
            'password' => Hash::make('user123$'),
            'name' => 'Public'
        ]);
    }

}

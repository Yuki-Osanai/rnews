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
         DB::table('users')->insert([
            [
            'name' => 'develop_user',
            'email' => 'my_email@gmail.com',
            'password' => Hash::make('my_secure_password'), // この場合、「my_secure_password」でログインできる
            'remember_token' => str_random(10),
            ],
            ['name' => 'develop_user2',
            'email' => 'my_email2@gmail.com',
            'password' => Hash::make('my_secure_password'), // この場合、「my_secure_password」でログインできる
            'remember_token' => str_random(10),],
            
             ['name' => 'develop_user3',
            'email' => 'my_email3@gmail.com',
            'password' => Hash::make('my_secure_password'), // この場合、「my_secure_password」でログインできる
            'remember_token' => str_random(10),],
            
             ['name' => 'develop_user4',
            'email' => 'my_email4@gmail.com',
            'password' => Hash::make('my_secure_password'), // この場合、「my_secure_password」でログインできる
            'remember_token' => str_random(10),],
        ]);
         factory(App\User::class, 5)->create();
    }
}

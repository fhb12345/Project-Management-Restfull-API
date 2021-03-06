<?php

use CodeProject\Entities\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        factory(User::class)->create(
            [
                'name'           => 'Fernando',
                'email'          => 'fernando.bandeira94@gmail.com',
                'password'       => bcrypt(123456),
                'remember_token' => str_random(10),
            ]
        );
        factory(User::class, 5)->create();
    }
}

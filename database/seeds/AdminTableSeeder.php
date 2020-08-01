<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'admin perpus',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);

        $user->assignRole('admin');
    }
}

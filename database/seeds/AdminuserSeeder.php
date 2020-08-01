<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'admin perpu2s',
            'email'=>'admin2@gmail.com',
            'password'=>bcrypt('12345678'),
            'email_verified_at'=>now(),
        ]);

        $user->assignRole('admin');
    }
}

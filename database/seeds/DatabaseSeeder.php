<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {	
    	$this->call(RolesTableSeeder::class);
    	$this->call(AdminuserSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(BooksTableSeeder::class);
    }
}

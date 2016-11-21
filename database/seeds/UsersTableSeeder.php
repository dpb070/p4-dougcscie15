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
        // Id = 1
        DB::table('users')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Jill',
            'email' => 'jill@harvard.edu',
            'password' => 'helloworld',
            'role' => 'admin'
        ]);
        // Id = 2
        DB::table('users')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Jamal',
            'email' => 'jamal@harvard.edu',
            'password' => 'helloworld',
            'role' => 'user'
        ]);
    }
}

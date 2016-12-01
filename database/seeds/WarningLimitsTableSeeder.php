<?php

use Illuminate\Database\Seeder;

class WarningLimitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('warning_limits')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'test_id' => 1,
          'user_id' => 1,
          'high_warning' => 200
      ]);
    }
}

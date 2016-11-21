<?php

use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    // Id = 1
    DB::table('tests')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'Blood Pressure (Systolic)',
      'units' => 'mm Hg',
      'validation_low_limit' => 30,
      'validation_high_limit' => 500,
      'default_low_warning' => 80,
      'default_high_warning' => 120,
      'comments' => 'Measured at rest'
    ]);
    // Id = 2
    DB::table('tests')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'Blood Pressure (Diastolic)',
      'units' => 'mm Hg',
      'validation_low_limit' => 30,
      'validation_high_limit' => 500,
      'default_low_warning' => 60,
      'default_high_warning' => 80,
      'comments' => 'Measured at rest'
    ]);
  }
}

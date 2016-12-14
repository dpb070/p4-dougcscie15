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
    DB::table('tests')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'Blood Pressure (Systolic)',
      'units' => 'mm Hg',
      'validation_low_limit' => 30,
      'validation_high_limit' => 500,
      'default_low_warning' => 60,
      'default_high_warning' => 120,
      'comments' => 'Measured at rest'
    ]);
    DB::table('tests')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'Blood Pressure (Diastolic)',
      'units' => 'mm Hg',
      'validation_low_limit' => 30,
      'validation_high_limit' => 500,
      'default_low_warning' => 40,
      'default_high_warning' => 80,
      'comments' => 'Measured at rest'
    ]);
    DB::table('tests')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'Cholesterol (Total)',
      'units' => 'mg/dL',
      'validation_low_limit' => 30,
      'validation_high_limit' => 500,
      'default_low_warning' => null,
      'default_high_warning' => 200,
      'comments' => null
    ]);
    DB::table('tests')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'Cholesterol (LDL)',
      'units' => 'mg/dL',
      'validation_low_limit' => 10,
      'validation_high_limit' => 300,
      'default_low_warning' => null,
      'default_high_warning' => 130,
      'comments' => null
    ]);
    DB::table('tests')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'Cholesterol (HDL)',
      'units' => 'mg/dL',
      'validation_low_limit' => 10,
      'validation_high_limit' => 300,
      'default_low_warning' => 40,
      'default_high_warning' => null,
      'comments' => null
    ]);
    DB::table('tests')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'name' => 'Blood Sugar (fast)',
      'units' => 'mg/dL',
      'validation_low_limit' => 20,
      'validation_high_limit' => 500,
      'default_low_warning' => null,
      'default_high_warning' => 100,
      'comments' => 'Measured upon awakening or after fasting'
    ]);      
  }
}

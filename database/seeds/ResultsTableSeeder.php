<?php

use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('results')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'test_id' => 1,
          'user_id' => 1,
          'result_date' => Carbon\Carbon::now()->toDateTimeString(),
          'value' => 110
      ]);
      DB::table('results')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'test_id' => 2,
          'user_id' => 1,
          'result_date' => Carbon\Carbon::now()->toDateTimeString(),
          'value' => 70
      ]);
    }
}

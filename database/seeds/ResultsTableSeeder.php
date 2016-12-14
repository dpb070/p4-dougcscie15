<?php

use Illuminate\Database\Seeder;

class ResultsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('results')->delete();

        \DB::table('results')->insert(array (
            0 =>
            array (
                'id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2016-12-14 00:19:50',
                'updated_at' => '2016-12-14 00:19:50',
                'result_date' => '2016-12-10',
                'value' => 115,
                'comments' => NULL,
                'test_id' => 1,
                'user_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2016-12-14 00:19:50',
                'updated_at' => '2016-12-14 00:19:50',
                'result_date' => '2016-12-10',
                'value' => 75,
                'comments' => NULL,
                'test_id' => 2,
                'user_id' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2016-12-14 00:19:50',
                'updated_at' => '2016-12-14 00:19:50',
                'result_date' => '2016-12-12',
                'value' => 110,
                'comments' => NULL,
                'test_id' => 1,
                'user_id' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2016-12-14 00:19:50',
                'updated_at' => '2016-12-14 00:19:50',
                'result_date' => '2016-12-12',
                'value' => 70,
                'comments' => NULL,
                'test_id' => 2,
                'user_id' => 1,
            ),
            array (
                'id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2016-12-14 00:19:50',
                'updated_at' => '2016-12-14 00:19:50',
                'result_date' => '2016-12-01',
                'value' => 180,
                'comments' => NULL,
                'test_id' => 3,
                'user_id' => 2,
            ),
            array (
                'id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2016-12-14 00:19:50',
                'updated_at' => '2016-12-14 00:19:50',
                'result_date' => '2016-12-05',
                'value' => 190,
                'comments' => NULL,
                'test_id' => 3,
                'user_id' => 2,
            ),
            array (
                'id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2016-12-14 00:19:50',
                'updated_at' => '2016-12-14 00:19:50',
                'result_date' => '2016-12-05',
                'value' => 110,
                'comments' => NULL,
                'test_id' => 6,
                'user_id' => 2,
            ),
            array (
                'id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2016-12-14 00:19:50',
                'updated_at' => '2016-12-14 00:19:50',
                'result_date' => '2016-12-05',
                'value' => 95,
                'comments' => 'retest',
                'test_id' => 6,
                'user_id' => 2,
            ),
        ));


    }
}

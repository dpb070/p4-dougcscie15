<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWarningLimitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_warning_limits', function (Blueprint $table) {

        $table->increments('id');

        $table->timestamps();

        $table->unsignedInteger('test_id');
        $table->unsignedInteger('user_id');
        $table->double('low_warning',10,3)->nullable();
        $table->double('high_warning',10,3)->nullable();


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::drop('user_warning_limits');
    }
}

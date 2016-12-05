<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarningLimitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('warning_limits', function (Blueprint $table) {

        $table->increments('id');

        $table->timestamps();

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
    Schema::drop('warning_limits');
    }
}

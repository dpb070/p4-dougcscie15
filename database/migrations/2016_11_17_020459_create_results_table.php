<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('results', function (Blueprint $table) {

      $table->increments('id');

      $table->timestamps();

      $table->unsignedInteger('test_id');
      $table->unsignedInteger('user_id');
      $table->date('result_date');
      $table->double('value',10,3);
      $table->string('comments')->nullable();
    });
  }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
Schema::drop('results');
    }
  }

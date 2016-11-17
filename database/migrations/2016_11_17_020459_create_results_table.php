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

      $table->integer('test_id');
      $table->integer('user_id');
      $table->dateTime('result_date');
      $table->double('value',10,3);
      $table->string('comments');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWarningsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()

  {
    Schema::create('user_warnings', function (Blueprint $table) {

      $table->increments('id');

      $table->timestamps();

      $table->integer('user_id');
      $table->integer('test_id');
      $table->string('units');
      $table->double('low_warning',10,3);
      $table->double('high_warning',10,3);
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
    Schema::drop('user_warnings');
  }
}

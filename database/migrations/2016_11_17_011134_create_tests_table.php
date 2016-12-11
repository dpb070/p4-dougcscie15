<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('tests', function (Blueprint $table) {

      $table->increments('id');
      $table->softDeletes();
      $table->timestamps();

      $table->string('name');
      $table->string('units');
      $table->double('validation_low_limit',10,3)->nullable();
      $table->double('validation_high_limit',10,3)->nullable();
      $table->double('default_low_warning',10,3)->nullable();
      $table->double('default_high_warning',10,3)->nullable();
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
    Schema::drop('tests');
  }
}

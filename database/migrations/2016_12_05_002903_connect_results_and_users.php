<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectResultsAndUsers extends Migration
{
  public function up() {

    Schema::table('results', function (Blueprint $table) {
      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users');
    });
  }

  public function down()
  {
      Schema::table('results', function (Blueprint $table) {
          $table->dropForeign('results_user_id_foreign');
          $table->dropColumn('user_id');
      });
  }
}

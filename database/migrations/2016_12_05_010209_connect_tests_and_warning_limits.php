<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectTestsAndWarningLimits extends Migration
{
  public function up() {

    Schema::table('warning_limits', function (Blueprint $table) {
      $table->integer('test_id')->unsigned();
      $table->foreign('test_id')->references('id')->on('tests');
    });
  }

  public function down()
  {
      Schema::table('warning_limits', function (Blueprint $table) {
          $table->dropForeign('warning_limits_test_id_foreign');
          $table->dropColumn('test_id');
      });
  }
}

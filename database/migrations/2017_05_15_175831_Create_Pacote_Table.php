<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Package', function (Blueprint $table) {
          $table->increments("id");
          $table->string("name", 100);
          $table->float("value");
          $table->date("startDate");
          $table->date("endDate");
          $table->text("description");
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Package');
    }
}

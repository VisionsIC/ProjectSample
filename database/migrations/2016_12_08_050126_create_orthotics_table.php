<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrthoticsTable extends Migration
{
    public function up()
    {
        Schema::create('orthotics', function (Blueprint $table) {

            $table->increments('id');
            $table->string('orthotic_type', 255);
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orthotics');
    }
}

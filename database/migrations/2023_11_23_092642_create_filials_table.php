<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('manufacture_id');
            $table->timestamps();
        });

        Schema::table('filials', function (Blueprint $table) {
            $table->foreign('manufacture_id')->references('id')->on('manufactures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filials');
    }
}

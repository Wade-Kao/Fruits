<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatformDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platform_detail', function (Blueprint $table) {
            $table->bigIncrements('GDNo');
            $table->integer('GNo');
            $table->integer('PDNo')->nullable();
            $table->string('PName', 50)->nullable();
            $table->integer('Qty')->nullable();
            $table->string('PRemark', 250)->nullable();
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
        Schema::dropIfExists('platform_detail');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetaliPlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detali_platforms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('master_platforms_id');
            $table->bigInteger('detali_products_id')->nullable();
            $table->string('PName', 50)->nullable();
            $table->decimal('Qty', 18, 2)->nullable();
            $table->string('Company', 50)->nullable();
            $table->decimal('PLCost', 18, 4)->nullable();
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
        Schema::dropIfExists('detali_platforms');
    }
}

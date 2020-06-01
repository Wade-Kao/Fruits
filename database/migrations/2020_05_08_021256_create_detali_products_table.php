<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetaliProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detali_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('master_products_id');
            $table->string('PName', 50)->nullable();
            $table->string('PType', 50)->nullable();
            $table->decimal('PCost', 18, 4)->nullable();
            $table->string('PIntroduction', 250)->nullable();
            $table->decimal('PPirce', 18, 4)->nullable();
            $table->decimal('PLPirce', 18, 4)->nullable();
            $table->boolean('PSsales')->default(false);
            $table->string('PImages', 250)->nullable();
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
        Schema::dropIfExists('detali_products');
    }
}

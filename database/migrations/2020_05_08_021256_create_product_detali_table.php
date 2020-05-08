<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_detali', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('PNo');
            $table->string('PName', 50)->nullable();
            $table->string('PType', 50)->nullable();
            $table->decimal('PCost', 18, 4)->nullable();
            $table->string('PIntroduction', 250)->nullable();
            $table->decimal('PPirce', 18, 4)->nullable();
            $table->decimal('PLPirce', 18, 4)->nullable();
            $table->boolean('PSsales')->default(false);
            $table->string('PImages', 250)->nullable();
            $table->string('PRemark', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_detali');
    }
}

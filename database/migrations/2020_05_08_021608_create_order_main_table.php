<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_main', function (Blueprint $table) {
            $table->bigIncrements('ONo');
            $table->datetime('ODate')->nullable();;
            $table->string('UId', 50)->nullable();
            $table->integer('BNo')->nullable();
            $table->decimal('OAmount', 18, 4)->nullable();
            $table->string('OPayment', 50)->nullable();
            $table->string('OShipping', 50)->nullable();
            $table->string('ORemark', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_main');
    }
}

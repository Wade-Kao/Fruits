<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_detalis_id')->nullable();
            $table->decimal('Qty', 18, 2)->nullable();
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
        Schema::dropIfExists('list_stocks');
    }
}

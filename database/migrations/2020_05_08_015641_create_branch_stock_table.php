<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_stock', function (Blueprint $table) {
            $table->bigIncrements('BSNo');
            $table->integer('PNo');
            $table->integer('PDNo');
            $table->integer('BNo');
            $table->integer('BSQty')->nullable();
            $table->string('BSUser', 50)->nullable();
            $table->timestamp('BSDateTime')->nullable();
            $table->integer('BSReQty')->nullable();
            $table->string('BSReUser', 50)->nullable();
            $table->timestamp('BSReDateTime')->nullable();
            $table->string('BSRemark', 250)->nullable();
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
        Schema::dropIfExists('branch_stock');
    }
}

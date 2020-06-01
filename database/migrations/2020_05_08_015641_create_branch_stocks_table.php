<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('list_stocks_id');
            $table->bigInteger('list_branchs_id');
            $table->decimal('BSQty', 18, 2)->nullable();
            $table->string('BSUser', 50)->nullable();
            $table->timestamp('BSDateTime')->nullable();
            $table->decimal('BSReQty', 18, 2)->nullable();
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
        Schema::dropIfExists('branch_stocks');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('ODate')->nullable();;
            $table->bigInteger('list_users_id');
            $table->bigInteger('list_branchs_id');
            $table->decimal('OAmount', 18, 4)->nullable();
            $table->string('OPayment', 50)->nullable();
            $table->string('OShipping', 50)->nullable();
            $table->string('ORemark', 250)->nullable();
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
        Schema::dropIfExists('main_orders');
    }
}

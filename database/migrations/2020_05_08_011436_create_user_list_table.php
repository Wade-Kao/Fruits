<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_list', function (Blueprint $table) {
            $table->bigIncrements('UNo');
            $table->string('UId', 50);
            $table->string('UName', 50);
            $table->string('UPassword', 50);
            $table->string('UPhone', 50)->nullable();
            $table->string('UAddress', 250)->nullable();
            $table->string('USex', 50)->nullable();
            $table->string('ULevel', 50)->nullable();;
            $table->string('URemark', 50)->nullable();
            $table->boolean('ULock')->default(false);
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
        Schema::dropIfExists('user_list');
    }
}

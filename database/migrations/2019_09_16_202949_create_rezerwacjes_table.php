<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRezerwacjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezerwacjes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_ID')->unsigned();
            $table->Integer('table_ID')->unisigned();
            $table->integer('persons');
            $table->date('date');
            $table->time('time');
            $table->timestamps();
        });

        Schema::table('rezerwacjes', function (Blueprint $table){
            $table->foreign('user_ID')
                ->references('id')
                ->on('users');

            $table->foreign('table_ID')
                ->references('table_id')
                ->on('stolikis'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezerwacjes');
    }
}

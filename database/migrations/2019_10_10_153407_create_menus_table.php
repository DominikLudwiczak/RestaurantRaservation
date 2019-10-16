<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('menu_kat_id')->unsigned();
            $table->text('danie');
            $table->integer('cena');
            $table->timestamps();
        });

        Schema::table('menus', function (Blueprint $table){
            $table->foreign('menu_kat_id')
                ->references('id')
                ->on('manu_kats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}

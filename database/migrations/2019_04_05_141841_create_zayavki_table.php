<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZayavkiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zayavkis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('fio');
            $table->string('tema');
            $table->integer('price_id');
            $table->text('z_text');
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
        Schema::dropIfExists('zayavkis');
    }
}

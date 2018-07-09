<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('card_id');
            $table->unsignedInteger('client_id');
            $table->timestamps();
            $table->foreign('card_id')->references('id')->on('cards');
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_cards');
    }
}

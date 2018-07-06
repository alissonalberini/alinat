<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191);
            $table->string('cpf_cnpj', 14);
            $table->string('ie', 20)->nullable();
            //Contact's information
            $table->string('phone', 20)->nullable();
            $table->string('cell_phone', 20);
            $table->string('email');
            //Adress's information
            $table->string('public_place')->nullable();
            $table->string('number', 100)->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('complement')->nullable();
            $table->integer('citie_id');
            $table->string('obs')->nullable();
            $table->string('url_logo')->nullable();
            $table->timestamps();
            $table->foreign('citie_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}

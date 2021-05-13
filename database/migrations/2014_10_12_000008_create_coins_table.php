<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TODO: A fin de poder vincular varios países a una moneda, se realizará una relación hasMany() a "countries"
        Schema::create('coins', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('code', 3)->nullable(); // tipo: EU, USD...
            $table->string('currency', 100)->nullable(); // tipo: "Euro", "Dólar estadounidense"...
            $table->string('symbol', 20)->nullable(); // tipo: €, $...

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
        Schema::dropIfExists('coins');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->default('I'); // "I" === "International"

            // Definirá la moneda del país
            $table->unsignedBigInteger('coin_id');
            $table->foreign('coin_id')
                  ->references('id')
                  ->on('coins');

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
        Schema::table('countries', function($table) {
            $table->dropForeign('countries_coin_id_foreign');
        });

        Schema::dropIfExists('countries');
    }
}

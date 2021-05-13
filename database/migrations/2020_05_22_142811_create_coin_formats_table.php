<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinFormatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coin_formats', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('code', 6)->nullable(); // por ejemplo: "es-ar"
            $table->string('code_format')->nullable(); // por ejemplo: "ES"
            $table->string('date_format', 50)->nullable(); // por ejemplo: "07/05/2020"
            $table->string('coin_format', 50)->nullable(); // por ejemplo: "1234,56 €"

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
        Schema::dropIfExists('coin_formats');
    }
}

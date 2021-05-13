<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecurrencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurrences', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name_ca')->nullable(); // mensual, cada 2 meses..., cada 12 meses
            $table->string('name_es')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_fr')->nullable();

            $table->string('code')->nullable(); // month, 2-months...

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
        Schema::dropIfExists('recurrences');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeOfRemunerationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_of_remunerations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name_ca')->nullable(); // Anual, Mensual, Semanal, Por horas
            $table->string('name_es')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_fr')->nullable();

            $table->string('code')->nullable();

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
        Schema::dropIfExists('type_of_remunerations');
    }
}

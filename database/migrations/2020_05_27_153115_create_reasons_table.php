<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reasons', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name_ca')->nullable(); // Inicio jornada, Fin jornada...
            $table->string('name_es')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_fr')->nullable();

            $table->string('code')->nullable();
            $table->integer('public')->default(1);

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
        Schema::dropIfExists('reasons');
    }
}

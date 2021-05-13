<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeekdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekdays', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name_ca')->nullable(); // Lunes, Martes, Miercoles...
            $table->string('name_es')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_fr')->nullable();

            $table->string('code')->nullable(); // l,m,m,j,v,s,d

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
        Schema::dropIfExists('weekdays');
    }
}

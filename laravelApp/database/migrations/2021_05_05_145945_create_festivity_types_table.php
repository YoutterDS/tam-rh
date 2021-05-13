<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFestivityTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('festivity_types', function (Blueprint $table) {
            $table->id();

            /*  Nacional, Regional, etc... */
            $table->string('name_es', 50)->nullable();
            $table->string('name_ca', 50)->nullable();
            $table->string('name_en', 50)->nullable();

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
        Schema::dropIfExists('festivity_types');
    }
}

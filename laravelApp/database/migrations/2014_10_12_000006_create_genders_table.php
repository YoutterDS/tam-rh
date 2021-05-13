<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('code', 3)->nullable(); // ej.: 'M', 'F', 'I'...

            $table->string('name_ca', 100)->nullable();
            $table->string('name_es', 100)->nullable();
            $table->string('name_en', 100)->nullable();
            $table->string('name_fr', 100)->nullable();

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
        Schema::dropIfExists('genders');
    }
}

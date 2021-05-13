<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreregisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preregisters', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('ip_address');
            $table->string('fullname', 251)->nullable();
            $table->string('email', 251)->unique()->nullable();
            $table->string('phone', 251)->nullable();
            $table->enum('politics', ['Y', 'N'])->nullable();
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
        Schema::dropIfExists('preregisters');
    }
}

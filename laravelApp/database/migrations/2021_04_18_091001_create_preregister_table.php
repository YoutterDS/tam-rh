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
            $table->string('fullname', 197)->nullable();
            $table->string('email', 197)->unique()->nullable();
            $table->string('phone', 197)->nullable();
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

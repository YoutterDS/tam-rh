<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name_ca')->default('demo');
            $table->string('name_es')->default('demo');
            $table->string('name_en')->default('demo');
            $table->string('name_fr')->default('demo');

            $table->string('code')->nullable();
            $table->decimal('price',9,2)->nullable()->comment('Precio por usuario, por mes');
            $table->enum('special', ['Y', 'N'])->default('N');

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
        Schema::dropIfExists('packages');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_options', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('package_id');
            $table->foreign('package_id')
                  ->references('id')
                  ->on('packages');

            $table->string('code')->comment('Código para identificar de la funcionalidad, ej. "max-users".');

            $table->string('name_ca')->comment('Nombre de la funcionalidad a mostrar en las cajas de los diferentes paquetes, ej.: "De 41 a 100 empleados"');
            $table->string('name_es');
            $table->string('name_en');
            $table->string('name_fr');

            $table->string('functionality_ca')->nullable()->comment('Texto descriptivo de la funcionalidad, ej. "Total de usuarios que podrás dar de alta en la aplicación."');
            $table->string('functionality_es')->nullable();
            $table->string('functionality_en')->nullable();
            $table->string('functionality_fr')->nullable();

            $table->enum('active', ['Y', 'N'])->default('N')->comment('Define si el paquete asociado a esta opción permitirá acceder a la funcionalidad especificada.');
            $table->integer('limit_min')->nullable()->comment('Define el límite mínimo que permite, ej.: 41 => "Mínmo de usuarios a dar de alta: 41".');
            $table->integer('limit_max')->nullable()->comment('Define el límite máximo que permite, ej.: 100 => "Máximo de usuarios a dar de alta: 100".');

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
        Schema::dropIfExists('package_options');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name', 251)->nullable(); // Se definen 251 carácteres como máximo, dado que si se ponen los 255, puede dar error al exportar/importar entre diferentes gestores mysql
            $table->string('business_name', 251)->nullable();
            $table->string('cif', 11)->nullable(); // Todo y que el formato es 1 Letra + 7 números + 1 Letra de control === 9 carácteres, se marcan 11 por seguridad, margen.
            $table->string('address', 251)->nullable();
            $table->string('address_secondary', 251)->nullable();
            $table->string('city', 251)->nullable();
            $table->string('postal_code', 100)->nullable(); // Debe ser tipo string, dado que pueden haber códigos postales de otros países que contengan caracteres alfanuméricos
            $table->string('state_province_region', 100)->nullable();
            $table->string('phone_number', 100)->nullable(); // No se limita integer dado que el teléfono puede tener "+35", "(35)"...
            $table->string('email', 100)->nullable();

            // Para definir una relación entre tablas, primero se especifica el nombre seguido de "_id"
            // * Si el campo "id" de la tabla a la que apunta es "bigIncrements", se debe definir "unsignedBigInteger"
            // * Se puede dar el caso, según versiones de Laravel o programación interna, que el campo "id" de la tabla a la que apunte, sea un "increments", con lo que
            //   la FK se deberá definir como "integer"
            $table->unsignedBigInteger('country_id');
            // Para que la relación tenga efecto, se debe:
            $table->foreign('country_id')  // definir qué campo es el ForeignKey
                  ->references('id')       // a qué campo hace referencia en la tabla hija, en esta caso "countries"
                  ->on('countries');       // a qué tabla apunta

            $table->unsignedBigInteger('setting_id');
            $table->foreign('setting_id')
                  ->references('id')
                  ->on('settings');

            $table->boolean('active')->default(false);

            $table->timestamps(); // ésta línea añade dos campos: created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function($table) {
            $table->dropForeign('companies_country_id_foreign');
            $table->dropForeign('companies_setting_id_foreign');
        });
        Schema::dropIfExists('companies');
    }
}

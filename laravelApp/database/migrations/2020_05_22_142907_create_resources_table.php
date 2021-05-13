<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->enum('type', ['gal','img','video','file','link','slider','carrousel'])->nullable();
            $table->string("name")->nullable();
            $table->string("url")->nullable();
            $table->string("ext")->nullable();

            $table->unsignedBigInteger('user_id'); // FK usuario que ha creado el recurso
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->string('model')->nullable(); // Nombre del Modelo al que se vincula (User,Package...))
            $table->integer('model_id')->nullable(); // FK del registro al cual vincula

            $table->string("dir")->nullable(); // Directorio específico en el que se encuentra el recurso

            $table->string("locale")->default('es'); // Visibilidad según idioma
            $table->integer("is_principal")->default('0');

            $table->integer("order")->default(0); // Orden dentro de los listados
            $table->integer("active")->default(1);

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
        Schema::table('resources', function($table) {
            $table->dropForeign('resources_user_id_foreign');
        });
        Schema::dropIfExists('resources');
    }
}

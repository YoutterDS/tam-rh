<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Tabla pivote, hace referencia a la vinculación de roles de los usuarios:
            - Un usuario puede tener varios roles (belongsToMany())
            - Al ser una tabla pivote, el nombre se compone de los dos modelos 'role' + '_' + 'user'
            * Aquí NO se sigue la regla de poner el nombre de la tabla en plural
        */
        Schema::create('role_user', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')
                ->references('id')
                ->on('roles');

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
        Schema::table('role_user', function($table) {
            /* Los nombres de las FK se definen:
                - nombre de la tabla 'role_user'
                - nombre del modelo 'user' + '_id'
                - + '_foreign'
            */
            $table->dropForeign('role_user_user_id_foreign');
            $table->dropForeign('role_user_role_id_foreign');
        });

        Schema::dropIfExists('role_user');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Tabla pivote, hace referencia a la vinculación de permisos de los usuarios:
            - Un usuario puede tener varios permisos (belongsToMany())
            - Al ser una tabla pivote, el nombre se compone de los dos modelos 'permission' + '_' + 'user'
            * Aquí NO se sigue la regla de poner el nombre de la tabla en plural
        */
        Schema::create('permission_user', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->unsignedBigInteger('permission_id');
            $table->foreign('permission_id')
                ->references('id')
                ->on('permissions');

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
        Schema::table('permission_user', function($table) {
            /* Los nombres de las FK se definen:
                - nombre de la tabla 'permission'
                - nombre del modelo 'role_user' + '_id'
                - + '_foreign'
            */
            $table->dropForeign('permission_user_user_id_foreign');
            $table->dropForeign('permission_user_permission_id_foreign');
        });
        Schema::dropIfExists('permission_user');
    }
}

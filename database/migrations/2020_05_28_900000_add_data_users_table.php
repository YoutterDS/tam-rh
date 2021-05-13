<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
                  ->references('id')
                  ->on('companies');

            $table->unsignedBigInteger('office_id');
            $table->foreign('office_id')
                  ->references('id')
                  ->on('offices');

            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')
                ->references('id')
                ->on('departments');

            $table->string('surname', 251)->after('name')->nullable(); // after() define la posición de la nueva columna en la tabla
            $table->dateTime('birthdate')->nullable();

            $table->unsignedBigInteger('gender_id'); // Género: Masculino, Femenino, Sin definir, etc...
            $table->foreign('gender_id')
                  ->references('id')
                  ->on('genders');

            $table->string('address', 251)->nullable();
            $table->string('address_secondary', 251)->nullable();
            $table->string('city', 251)->nullable();
            $table->string('postal_code', 100)->nullable(); // Debe ser tipo string, dado que pueden haber códigos postales de otros países que contengan caracteres alfanuméricos
            $table->string('state_province_region', 100)->nullable();

            $table->unsignedBigInteger('country_id'); // Nacionalidad
            $table->foreign('country_id')
                  ->references('id')
                  ->on('countries');

            $table->string('phone_number', 100)->nullable();

            $table->text('nif_nie')->nullable(); // TODO: Este campo comportaría muchos problemas seguridad a la hora de
            // almacenarlo... mejor NO almacenar información bancaria... hay que plantearse NO hacerlo
            // ¿Es realmente necesario?
            // De ser así, utilizar: https://laravel.com/docs/5.8/encryption

            $table->text('iban')->nullable(); // TODO: Este campo comportaría muchos problemas seguridad a la hora de
            // almacenarlo... mejor NO almacenar información bancaria... hay que plantearse NO hacerlo
            // ¿Es realmente necesario?
            // De ser así, utilizar: https://laravel.com/docs/5.8/encryption

            $table->text('social_security_number')->nullable();  // TODO: Este campo comportaría muchos problemas seguridad a la hora de
            // almacenarlo... mejor NO almacenar información personal de ese nivel... hay que plantearse NO hacerlo
            // ¿Es realmente necesario?
            // De ser así, utilizar: https://laravel.com/docs/5.8/encryption

            // Para que el modelo reconozca que son campos encriptados:
            /*
                protected $encryptable = [
                    'nif_nie',
                    'iban',
                    'social_security_number'
                ];
            */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropForeign('users_company_id_foreign');
            $table->dropForeign('users_gender_id_foreign');
            $table->dropForeign('users_country_id_foreign');
            $table->dropForeign('users_office_id_foreign');
            $table->dropForeign('users_department_id_foreign');

            $table->dropColumn('surname');
            $table->dropColumn('birthdate');
            $table->dropColumn('phone_number');
            $table->dropColumn('email');
            $table->dropColumn('last_login_at');
            $table->dropColumn('ip');
        });
    }
}

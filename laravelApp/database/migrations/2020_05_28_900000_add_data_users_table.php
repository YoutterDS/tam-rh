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

            $table->string('photo')->nullable();

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')
                  ->references('id')
                  ->on('companies');

            $table->unsignedBigInteger('office_id')->nullable();
            $table->foreign('office_id')
                  ->references('id')
                  ->on('offices');

            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')
                ->references('id')
                ->on('departments');

            $table->string('surname', 251)->after('name')->nullable(); // after() define la posición de la nueva columna en la tabla
            $table->dateTime('birthdate')->nullable();

            $table->unsignedBigInteger('gender_id')->nullable(); // Género: Masculino, Femenino, Sin definir, etc...
            $table->foreign('gender_id')
                  ->references('id')
                  ->on('genders');

            $table->string('address', 251)->nullable();
            $table->string('address_secondary', 251)->nullable();
            $table->string('city', 251)->nullable();
            $table->string('postal_code', 100)->nullable(); // Debe ser tipo string, dado que pueden haber códigos postales de otros países que contengan caracteres alfanuméricos
            $table->string('state_province_region', 100)->nullable();

            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')
                  ->references('id')
                  ->on('countries');

            $table->string('phone_number', 100)->nullable();
            $table->string('mobile_number', 100)->nullable();

            $table->text('nif_nie')->nullable();
            $table->text('iban')->nullable();
            $table->text('social_security_number')->nullable();

            $table->string('link_twitter', 100)->nullable();
            $table->string('link_facebook', 100)->nullable();
            $table->string('weekdais', 100)->nullable();
            $table->string('position', 100)->nullable();

            $table->unsignedBigInteger('manager_id')->nullable();
            $table->foreign('manager_id')
                  ->references('id')
                  ->on('users');

            $table->integer('daily_hours')->nullable();
            $table->integer('annual_hours')->nullable();

            $table->unsignedBigInteger('contract_id')->nullable();
            $table->foreign('contract_id')
                  ->references('id')
                  ->on('contracts');

            $table->string('number_payments', 10)->nullable();
            $table->string('annual_gross_salary', 100)->nullable();
            $table->string('iban_number', 20)->nullable();
            $table->date('contracted_at')->nullable();

            $table->unsignedBigInteger('locale_id')->nullable();
            $table->foreign('locale_id')
                  ->references('id')
                  ->on('locales');
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
            $table->dropForeign('users_manager_id_foreign');
            $table->dropForeign('users_contract_id_foreign');

            $table->dropColumn('surname');
            $table->dropColumn('birthdate');
            $table->dropColumn('phone_number');
            $table->dropColumn('email');
            $table->dropColumn('last_login_at');
            $table->dropColumn('ip');
            $table->dropColumn('nif_nie');
            $table->dropColumn('link_twitter');
            $table->dropColumn('link_facebook');
            $table->dropColumn('weekdais');
            $table->dropColumn('position');
            $table->dropColumn('iban');
            $table->dropColumn('social_security_number');
            $table->dropColumn('number_payments');
            $table->dropColumn('annual_gross_salary');
            $table->dropColumn('iban_number');
            $table->dropColumn('contracted_at');
        });
    }
}

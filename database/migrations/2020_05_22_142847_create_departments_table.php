<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name_ca', 100)->nullable();
            $table->string('name_es', 100)->nullable();
            $table->string('name_en', 100)->nullable();
            $table->string('name_fr', 100)->nullable();

            /* En este caso se hace una exceptión en la nomenclautra dado que se trata de un
               campo especial
            */
            $table->unsignedBigInteger('head_of_department_user_id');
            $table->foreign('head_of_department_user_id')
                  ->references('id')
                  ->on('users');

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
        Schema::table('departments', function($table) {
            $table->dropForeign('departments_head_of_department_user_id_foreign');
        });
        Schema::dropIfExists('departments');
    }
}

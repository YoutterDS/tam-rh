<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->date('date_start')->nullable();
            $table->date('date_ending')->nullable();
            $table->string('title', 100)->nullable();

            $table->integer('hours')->nullable();

            $table->unsignedBigInteger('periodicity_id')->nullable();
            $table->foreign('periodicity_id')
                  ->references('id')
                  ->on('periodicities');

            // Weekdays => tendrá una tabla pivote "contract_weekday"
            // Resumen: (John Doe trabaja 4 días a la semana) => Será un Mutator

            $table->unsignedBigInteger('type_of_remuneration_id')->nullable();
            $table->foreign('type_of_remuneration_id')
                  ->references('id')
                  ->on('type_of_remunerations');

            $table->float('quantity', 12, 3);

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
        Schema::table('contracts', function($table) {
            $table->dropForeign('contracts_periodicity_id_foreign');
            $table->dropForeign('contracts_type_of_remuneration_id_foreign');
        });
        Schema::dropIfExists('contracts');
    }
}

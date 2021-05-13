<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariableCompensationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variable_compensations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('recurrence_id')->nullable();
            $table->foreign('recurrence_id')
                  ->references('id')
                  ->on('recurrences');

            $table->float('quantity', 12, 3);
            $table->boolean('quantity_undefined')->default(false);
            $table->text('description')->nullable();

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
        Schema::table('variable_compensations', function($table) {
            $table->dropForeign('variable_compensations_recurrence_id_foreign');
        });
        Schema::dropIfExists('variable_compensations');
    }
}

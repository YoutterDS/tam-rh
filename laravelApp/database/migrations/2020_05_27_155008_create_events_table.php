<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title', 251)->nullable();

            $table->timestamp('starts_on')->nullable();
            $table->timestamp('ends_on')->nullable();

            $table->text('location')->nullable();
            $table->text('description')->nullable();

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
                  ->references('id')
                  ->on('companies');

            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments');

            // "Vincular participantes" => tabla pivote "event_user"

            $table->boolean('assistance_confirmation')->default(false);
            $table->boolean('comments')->default(true);

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
        Schema::table('events', function($table) {
            $table->dropForeign('events_company_id_foreign');
            $table->dropForeign('events_department_id_foreign');
        });
        Schema::dropIfExists('events');
    }
}

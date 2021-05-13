<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_lists', function (Blueprint $table) {
            $table->id();

            $table->string('name_es')->nullable();
            $table->string('name_ca')->nullable();
            $table->string('name_en')->nullable();

            $table->text('description_es')->nullable();
            $table->text('description_ca')->nullable();
            $table->text('description_en')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
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
        Schema::dropIfExists('document_lists');
    }
}

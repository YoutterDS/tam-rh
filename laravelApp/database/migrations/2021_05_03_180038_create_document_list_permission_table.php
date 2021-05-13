<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentListPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_list_permission', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('document_list_id');
            $table->foreign('document_list_id')
                  ->references('id')
                  ->on('document_lists');

            $table->unsignedBigInteger('office_id');
            $table->foreign('office_id')
                  ->references('id')
                  ->on('offices');

            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments');

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
        Schema::dropIfExists('document_list_permission');
    }
}

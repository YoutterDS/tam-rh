<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name_ca')->nullable();
            $table->string('slug_ca')->nullable();

            $table->string('name_es')->nullable();
            $table->string('slug_es')->nullable();

            $table->string('name_en')->nullable();
            $table->string('slug_en')->nullable();

            $table->string('name_fr')->nullable();
            $table->string('slug_fr')->nullable();

            $table->string('extra_class')->nullable();

            $table->unsignedBigInteger('role_id')->default(1);

            $table->timestamps();

            $table->foreign('role_id')
                  ->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus', function($table) {
            $table->dropForeign('menus_role_id_foreign');
        });
        Schema::dropIfExists('menus');
    }
}

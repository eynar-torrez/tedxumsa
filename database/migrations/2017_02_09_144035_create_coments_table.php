<?php

use Illuminate\Database\Migrations\Migration;

class CreateComentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coments', function ($table) {
            $table->increments('id');
            $table->string('article_id', 100);
            $table->text('contenido');
            $table->string('nombre',200);
            $table->string('correo',200);
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
        Schema::drop('coments');
    }
}

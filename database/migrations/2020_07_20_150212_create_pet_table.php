<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('raca');
            $table->string('peso');
            $table->integer('idade');
            $table->enum('sexo', ['MASCULINO', 'FEMININO']);

            $table->foreignId('id_cliente')->unsigned();
            $table->foreign('id_cliente')->references('id')->on('cliente')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet');
    }
}

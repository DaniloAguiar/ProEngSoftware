<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();


            $table->text('descrição');
            $table->float('peso');
            $table->double('valor');
            $table->enum('tipo', ['SERVICO', 'PRODUTO']);

            $table->foreignId('id_fornecedor')->unsigned();
            $table->foreign('id_fornecedor')->references('id')->on('fornecedor')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('produto');
    }
}

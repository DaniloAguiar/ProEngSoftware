<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_produto', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_produto')->unsigned();
            $table->foreign('id_produto')->references('id')->on('produto')->onUpdate('cascade')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_pedido')->unsigned();
            $table->foreign('id_pedido')->references('id')->on('pedido')->onUpdate('cascade')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('pedido_produto');
    }
}

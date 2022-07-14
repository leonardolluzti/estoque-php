<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrada', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 20);
            $table->string('serie', 10);
            $table->string('fornecedor', 200);
            $table->dateTime('dataEmissao');
            $table->string('tipo', 100);
            $table->string('nome', 200);
            $table->string('unidade', 100);
            $table->integer('qtd');
            $table->float('valorUnit');
            $table->float('valorTotal');
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
        Schema::dropIfExists('entrada');
    }
};

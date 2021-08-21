<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->tinyInteger('tipo_chamado');
            $table->string('assumido_por', 50)->nullable();
            $table->bigInteger('whatsapp');
            $table->text('produto')->nullable();
            $table->unsignedInteger('cep')->nullable();
            $table->string('rua', 50)->nullable();
            $table->string('bairro', 30)->nullable();
            $table->string('cidade', 30)->nullable();
            $table->unsignedSmallInteger('numero')->nullable();
            $table->string('complemento', 50)->nullable();
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
        Schema::dropIfExists('chamados');
    }
}

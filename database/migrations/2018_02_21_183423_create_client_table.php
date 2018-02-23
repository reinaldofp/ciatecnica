<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     * Criado por reinaldofp@gmail.com
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');

            /** Tipo cliente, define se é
             * Pessoa Jurídica -> 1
             * Pessoa Física   -> 2
             **/
            $table->integer('tipocliente');
            $table->integer('cpf');
            $table->date('nascimento');
            $table->string('nome');
            $table->string('sobrenome',15);
            $table->int('cep',8);
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf', 8);

            /**
            * Campos para cadastro de Pessoa Jurídica
             **/
            $table->integer('cnpj');
            $table->string('razao');
            $table->string('fantasia');
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
        Schema::dropIfExists('client');
    }
}

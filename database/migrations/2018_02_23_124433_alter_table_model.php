<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Alterando a tabela Client
        Schema::table('client',function($table){
            $table->integer('cnpj')->nullable()->change();
            $table->string('razao')->nullable()->change();
            $table->string('fantasia')->nullable()->change();
            $table->integer('cpf')->nullable()->change();
            $table->date('nascimento')->nullable()->change();
            $table->string('nome')->nullable()->change();
            $table->string('sobrenome')->nullable()->change();
            $table->string('complemento')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //


    }
}

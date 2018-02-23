<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = 'client';
    protected $fillable = ['tipocliente','cpf','nascimento','nome','sobrenome','cep','logradouro','numero','complemento','bairro','cidade','uf','cnpj','razao','fantasia'];
}


@extends('client.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Detalhe do cadastro</h3> <a class="btn btn-xs btn-primary" href="{{route('client.index')}}">Voltar</a>
                <hr>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xg-6">
            <div class="form-group">
                <strong>Nome :</strong>
                {{ $client->nome }}
            </div>
        </div>
        <div class="col-xg-6">
            <div class="form-group">
                <strong>Sobrenome :</strong>
                {{ $client->sobrenome }}
            </div>
        </div>
        <div class="col-xg-4">
            <div class="form-group">
                <strong>CEP :</strong>
                {{ $client->cep }}
            </div>
        </div>
        <div class="col-xg-4">
            <div class="form-group">
                <strong>Logradouro :</strong>
                {{ $client->logradouro }}
            </div>
        </div>
        <div class="col-xg-4">
            <div class="form-group">
                <strong>Número :</strong>
                {{ $client->numero }}
            </div>
        </div>
        <div class="col-xg-6">
            <div class="form-group">
                <strong>Complemento :</strong>
                {{ $client->complemento }}
            </div>
        </div>
        <div class="col-xg-3">
            <div class="form-group">
                <strong>Bairro :</strong>
                {{ $client->bairro }}
            </div>
        </div>
        <div class="col-xg-3">
            <div class="form-group">
                <strong>Cidade :</strong>
                {{ $client->cidade }}
            </div>
        </div>
        <div class="col-xg-12">
            <div class="form-group">
                <strong>UF :</strong>
                {{ $client->uf }}
            </div>
        </div>
        <div class="col-xg-12">
            <div class="form-group">
                <strong>CNPJ :</strong>
                {{ $client->cnpj }}
            </div>
        </div>
        <div class="col-xg-12">
            <div class="form-group">
                <strong>Razão Social:</strong>
                {{ $client->razao }}
            </div>
        </div>
        <div class="col-xg-12">
            <div class="form-group">
                <strong>Nome Fantasia :</strong>
                {{ $client->fantasia }}
            </div>
        </div>
    </div>

@endsection

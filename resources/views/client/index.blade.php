@extends('client.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>Crud Laravel - Reinaldofp@gmail.com</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-success" href="{{ route('client.create')}}">Cadastrar novo Cliente</a>
            </div>

        </div>
    </div>

        @if($message = Session::get('success'))
            <div class="alert alert-success">
             <p>{{$message}}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>Razão</th>
                <th>Nome Fantasia</th>
                <th width="300px">Acao</th>
            </tr>

            @foreach ($client as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>

                    @if($cliente->tipocliente == 1)
                        <td>Pessoa Jurídica</td>
                    @else
                        <td>Pessoa Física</td>
                    @endif



                    <td>{{$cliente->cpf}}</td>

                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->sobrenome}}</td>

                    <td>{{$cliente->cidade}}</td>
                    <td>{{$cliente->uf}}</td>

                    <td>{{$cliente->razao}}</td>
                    <td>{{$cliente->fantasia}}</td>
                    <td>
                        <a class="btn btn-xs btn-info" href="{{route('client.show', $cliente->id)}}">Show</a>
                        <a class="btn btn-xs btn-primary" href="{{route('client.edit', $cliente->id)}}">Edit</a>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['client.destroy', $cliente->id], 'style'=> 'display:inline']) !!}
                        {!! Form::submit('Delete', ['class'=> 'btn btn-xs btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $client ->links() !!}
    @endsection
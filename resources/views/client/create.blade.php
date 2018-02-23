@extends('client.master')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Adiconar novo cliente</h3>
            </div>
        </div>
    </div>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Atenção!!</strong> Há algum problema nesta interação. <br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['route' => 'client.store', 'method' => 'POST']) !!}
    @include('client.form')
    {!! Form::close()!!}
@endsection
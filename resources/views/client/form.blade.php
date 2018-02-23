<div class="row">
    <div class="col-xs-12">
        <div class="form-group">
            <strong>Escolha o tipo de cliente :</strong>
            {!! Form::select('tipocliente', array('1' => 'Pessoa Jurídica', '2' => 'Pessoa Física')) !!}

        </div>
    </div>

    <div class="col-xs-3">
        <div class="form-group">

            {!! Form::text('nome', null, ['placeholder'=> 'Nome', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">

            {!! Form::text('sobrenome', null, ['placeholder'=> 'Sobrenome', 'class' => 'form-control', 'maxlength' => 15 ]) !!}
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">

            {!! Form::text('cpf', null, ['placeholder'=> 'CPF', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">

            {!! Form::date('nascimento', null, ['placeholder'=> 'Nascimento', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">

            {!! Form::hidden('cnpj', null, ['placeholder'=> 'CNPJ', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-5">
        <div class="form-group">

            {!! Form::hidden('razao', null, ['placeholder'=> 'Razao Social', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-5">
        <div class="form-group">

            {!! Form::hidden('fantasia', null, ['placeholder'=> 'Nome Fantasia', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-7">
        <div class="form-group">

            {!! Form::text('cep', null, ['placeholder'=> 'Cep', 'class' => 'form-control','maxlength' => 8]) !!}
        </div>
    </div>
    <div class="col-xs-5">
        <div class="form-group">

            {!! Form::text('cidade', null, ['placeholder'=> 'Cidade', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-7">
        <div class="form-group">

            {!! Form::text('complemento', null, ['placeholder'=> 'Complemento', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-5">
        <div class="form-group">

            {!! Form::text('logradouro', null, ['placeholder'=> 'Logradouro', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">

            {!! Form::text('numero', null, ['placeholder'=> 'Número', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-6">
        <div class="form-group">

            {!! Form::text('bairro', null, ['placeholder'=> 'Bairro', 'class' => 'form-control']) !!}
        </div>
    </div>


    <div class="col-xs-3">
        <div class="form-group">

            {!! Form::text('uf', null, ['placeholder'=> 'UF', 'class' => 'form-control','maxlength' => 8]) !!}
        </div>
    </div>



    <div class="col-xg-12">
        <a class="btn btn-xs btn-success" href="{{route('client.index')}}">Voltar</a>
        <button type="submit" class="btn btn-xs btn-primary" name="button">Cadastrar</button>
    </div>
</div>
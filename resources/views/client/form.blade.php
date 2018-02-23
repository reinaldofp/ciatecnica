<div class="row">
    <div class="col-xs-12">
        <div class="form-group">
            <strong>Escolha o tipo de cliente :</strong>
            {!! Form::select('tipocliente', array('1' => 'Pessoa Jurídica', '2' => 'Pessoa Física')) !!}

        </div>

    </div>
    
    <div class="col-xs-3">
        <div class="form-group">
            <strong>Nome :</strong>
            {!! Form::text('nome', null, ['placeholder'=> 'Nome', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <strong>Sobrenome :</strong>
            {!! Form::text('sobrenome', null, ['placeholder'=> 'Sobrenome', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <strong>CPF :</strong>
            {!! Form::text('cpf', null, ['placeholder'=> 'CPF', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <strong>Nascimento :</strong>
            {!! Form::date('nascimento', null, ['placeholder'=> 'Nascimento', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <strong>Cnpj :</strong>
            {!! Form::text('cnpj', null, ['placeholder'=> 'CNPJ', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-5">
        <div class="form-group">
            <strong>Razao :</strong>
            {!! Form::text('razao', null, ['placeholder'=> 'Razao Social', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-5">
        <div class="form-group">
            <strong>Fantasia :</strong>
            {!! Form::text('fantasia', null, ['placeholder'=> 'Nome Fantasia', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-7">
        <div class="form-group">
            <strong>Cep :</strong>
            {!! Form::text('cep', null, ['placeholder'=> 'Cep', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-5">
        <div class="form-group">
            <strong>Cidade :</strong>
            {!! Form::text('cidade', null, ['placeholder'=> 'Cidade', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-7">
        <div class="form-group">
            <strong>Complemento :</strong>
            {!! Form::text('complemento', null, ['placeholder'=> 'Complemento', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-5">
        <div class="form-group">
            <strong>Logradouro :</strong>
            {!! Form::text('logradouro', null, ['placeholder'=> 'Logradouro', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <strong>Numero :</strong>
            {!! Form::text('numero', null, ['placeholder'=> 'Número', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-6">
        <div class="form-group">
            <strong>Bairro :</strong>
            {!! Form::text('bairro', null, ['placeholder'=> 'Bairro', 'class' => 'form-control']) !!}
        </div>
    </div>


    <div class="col-xs-3">
        <div class="form-group">
            <strong>UF :</strong>
            {!! Form::text('uf', null, ['placeholder'=> 'UF', 'class' => 'form-control']) !!}
        </div>
    </div>



    <div class="col-xg-12">
        <a class="btn btn-xs btn-success" href="{{route('client.index')}}">Voltar</a>
        <button type="submit" class="btn btn-xs btn-primary" name="button">Cadastrar</button>
    </div>
</div>
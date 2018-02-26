<div class="row">
    <div class="col-xs-12">
        <div class="form-group">
            <strong>Escolha o tipo de cliente :</strong>

            <select name="tipocliente" id="tipocliente" onchange="funcaoJavascript()">
                <option value="1">Pessoa Jurídica</option>
                <option value="2">Pessoa Física</option>
            </select>
        </div>
    </div>


   <script>
        funcaoJavascript = function(){
            var $variaveljs = (document.getElementById('tipocliente').value);
            //alert($variaveljs);
            //document.getElementById("txtValor").value = "1";
            //var cep = document.getElementById("cep");
            if($variaveljs == 2) {

                document.getElementById("cnpj").className = "hidden";
                document.getElementById("razao").className = "hidden";
                document.getElementById("fantasia").className = "hidden";

                document.getElementById("nome").className = "col-xs-3 show";
                document.getElementById("sobrenome").className = "col-xs-4 show";
                document.getElementById("cpf").className = "col-xs-3 show";
                document.getElementById("nascimento").className = "col-xs-2 show";
            }
            else{
                document.getElementById("cnpj").className = "col-xs-2 show";
                document.getElementById("razao").className = "col-xs-5 show";
                document.getElementById("fantasia").className = "col-xs-5 show";

                document.getElementById("nome").className = "hidden";
                document.getElementById("sobrenome").className = "hidden";
                document.getElementById("cpf").className = "hidden";
                document.getElementById("nascimento").className = "hidden";
            }
        }
    </script>


            <div class="col-xs-2" id="cnpj">
                <div class="form-group">
                    {!! Form::text('cnpj', null, ['placeholder'=> 'CNPJ', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-5" id="razao">
                <div class="form-group">

                    {!! Form::text('razao', null, ['placeholder'=> 'Razao Social', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-5" id="fantasia">
                <div class="form-group">

                    {!! Form::text('fantasia', null, ['placeholder'=> 'Nome Fantasia', 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-xs-3 hidden" id="nome">
                <div class="form-group">

                    {!! Form::text('nome', null, ['placeholder'=> 'Nome', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-4  hidden" id="sobrenome">
                <div class="form-group">

                    {!! Form::text('sobrenome', null, ['placeholder'=> 'Sobrenome', 'class' => 'form-control', 'maxlength' => 15 ]) !!}
                </div>
            </div>
            <div class="col-xs-3  hidden" id="cpf">
                <div class="form-group">

                    {!! Form::text('cpf', null, ['placeholder'=> 'CPF', 'class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-xs-2  hidden" id="nascimento">
                <div class="form-group">

                    {!! Form::date('nascimento', null, ['placeholder'=> 'Nascimento', 'class' => 'form-control']) !!}
                </div>
            </div>


    <div class="col-xs-7" id="cep">
        <div class="form-group">

            {!! Form::text('cep', null, ['placeholder'=> 'Cep', 'class' => 'form-control']) !!}
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

            {!! Form::text('uf', null, ['placeholder'=> 'UF', 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xg-12">
        <a class="btn btn-xs btn-success" href="{{route('client.index')}}">Voltar</a>
        <button type="submit" class="btn btn-xs btn-primary" name="button">Cadastrar</button>
    </div>
</div>
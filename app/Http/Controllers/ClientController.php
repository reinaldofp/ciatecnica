<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $client = Client::latest()->paginate(5);
    return view('client.index', compact('client'))->with('i',(request()->input('page',1)-1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipocli = $request->input("tipocliente");
        $dn = $request->input("nascimento");
        // Se a escolha for Pessoa Jurídica
        if($tipocli == 1){
            request()->validate([
                'tipocliente' => 'required',
                'cep'=> 'required',
                'logradouro'=> 'required',
                'numero'=> 'required',
                'bairro'=> 'required',
                'cidade'=> 'required',
                'uf'=> 'required',
                'cnpj'=> 'required',
                'razao'=> 'required',
                'fantasia'=> 'required',
            ]);

            Client::create($request->all());
            return redirect()->route('client.index')->with('sucess', 'Cadastro de Pessoa Jurídica realizado com sucesso');
        }else{
        // Se a escolha for pessoa Física

            list($anoniver, $mesniver, $dianiver) = explode('-', $dn);

            // Descobre que dia é hoje e retorna a unix timestamp
            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            // Descobre a unix timestamp da data de nascimento do fulano
            $nascimento = mktime( 0, 0, 0, $mesniver, $dianiver, $anoniver);
            // Depois apenas fazemos o cálculo já citado :)
            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);


            if($idade < 19) {
              //  echo "<br>Usuário não pode ser cadastrado na base de dados pois tem a idade menor que 19 anos";
                return redirect()->route('client.create')->with('warning', 'Idade inferior a 19 anos');

            }
            else {

                request()->validate([
                    'tipocliente' => 'required',
                    'cpf'=> 'required',
                    'nascimento'=> 'required',
                    'nome'=> 'required',
                    'sobrenome'=> 'required|max:15',
                    'cep'=> 'required|max:8',
                    'logradouro'=> 'required',
                    'numero'=> 'required',
                    'bairro'=> 'required',
                    'cidade'=> 'required',
                    'uf'=> 'required|max:8',
                ]);


                //request()->except(['complemento']);
                Client::create($request->all());
                return redirect()->route('client.index')->with('sucess', 'Cadastro de Pessoa Física realizado com sucesso');
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Visualiza um determinado registro
        $client = Client::find($id);
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Editar os dados dos clientes
        $client = Client::find($id);
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //dd(request()->input([tipocliente]));

        // Atualizar dados do cliente

        request()->validate([
            'tipocliente' => 'required',
            'cpf'=> 'required',
            'nascimento'=> 'required',
            'nome'=> 'required',
            'sobrenome'=> 'required',
            'cep'=> 'required',
            'logradouro'=> 'required',
            'numero'=> 'required',
            //'complemento'=> 'required',
            'bairro'=> 'required',
            'cidade'=> 'required',
            'uf'=> 'required',
            'cnpj'=> 'required',
            'razao'=> 'required',
            'fantasia'=> 'required',

        ]);
        request()->except(['complemento']);
        Client::find($id)->update($request->all());
        return redirect()->route('client.index')->with('sucess','Cadastro Atualizado com sucesso');

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Deletar usuário da base
        Client::find($id)->delete();
        return redirect()->route('client.index')->with('Success', 'Cliente deletado com sucesso' );
    }
}

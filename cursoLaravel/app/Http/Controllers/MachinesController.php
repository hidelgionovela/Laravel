<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MachinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $maquinas = DB::select('select id,nome from machines');
        // dd == var_dump
        // A diferenca ee que o dd imprime e pausa o processamento e o var_dump nao pausa o processamento
        // var_dump($maquinas);
        // dd($maquinas);

        //  No Exemplo acima quem esta recuperando os dados ee a controller que nao ee o correcto no modelo mvc
        // Quem deve recuperar os dados e a model

        $maquinas = Machine::all();
        // dd($maquinas);

        return view('machines.PaginaInicial')->with('machines', $maquinas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('machines.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Primeira Forma de cadastrar
        // $maquinas = new Machine();
        // $maquinas->nome = $request->nome;
        // $maquinas->save();

        // return redirect('/listar');


        // Segunda Forma de cadastrar

        // dd($request->all());
        // Machine::create($request->all());

        // Terceira Forma de cadastrar
        // Machine::create($request->only('nome'));
        //  return redirect('/listar')->with('sucesso', 'Maquina Cadastrada com Sucesso!');

        // depois de implimentar links fica assim
        Machine::create($request->only('nome'));
        return redirect('machines')->with('sucesso', 'Maquina Cadastrada com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Machine $machine)
    {
        return view('machines.show')->with('machine', $machine);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresencaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        return view('site.presenca.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'Confirmando presença!';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participante  $participante
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //pesquisar no banco de acordo com o cpf

        //dd($request->all());
        //$presenca = Presenca::where('cpf', 'like','%'.$request->input('cpf').'%');

        //print_r($request);
        //return view('site.presenca.presenca');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participante  $presenca
     * @return \Illuminate\Http\Response
     */
    public function edit(Participante $participante)
    {
        //
        return view('site.presenca.editardados');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participante  $presenca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participante $participante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participante  $presenca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participante $participante)
    {
        //
    }

    public function listar(Request $request){
        $participante = Participante::where('cpf','like', '%'.$request->input('cpf').'%')
            ->where('nome','like', '%'.$request->input('nome').'%')
            ->where('email','like', '%'.$request->input('email').'%')
            ->where('telefone','like', '%'.$request->input('telefone').'%')
            ->where('vinculo','like', '%'.$request->input('vinculo').'%')
            ->where('cargo','like', '%'.$request->input('cargo').'%')
            ->where('setor','like', '%'.$request->input('setor').'%')
            ->get();

        dd($participante);
        return view('site.presenca.listar');
    }
}

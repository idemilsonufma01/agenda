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
    public function edit($id)
    {
        $participante = Participante::find($id);
        return view('site.presenca.editardados',['participante'=>$participante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participante  $presenca
     * @return \Illuminate\Http\Response
     */
    public function adicionar(Request $request)
    {
        //edição
        //if($request->input('_token') !=  ' '  &&  $request->input('id')   != ''){

           $participante = Participante::find($request->input('id'));

            dd($participante);
            /*
            $participante  -> update($request->all());
            $update = $participante->update($request->all());

            if($update){
                echo 'Update realizado com sucesso';
            } else {
                echo 'Update apresentou problema';
            }
            */

       // }
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

    public function mostrar(Request $request){
        $participante = Participante::where('cpf','like', '%'.$request->input('cpf').'%')->first();
        return view('site.presenca.mostrar',['participante' => $participante]);
    }
}

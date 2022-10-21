@extends('layouts.app')
@section('content')

<div class ="container">
    <div class="opacity-75 bg-secondary p-2 mb-5">
          <h2 class="text-light text-center ">Homologação de Evento</h2>
    </div>

    <div class="">
            <div class="justify-content-center">
            
               <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>Data de Solicitação</th>
                            <th>Horário Inicial</th>
                            <th>Horário Final</th>
                            <th>Quant Pessoas</th>
                            <th>Sala/Auditório</th>
                            <th>Solicitante</th>
                            <th>Homologar</th>
                            <th>Não Homologar</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
              </table>

                                
            </div>
    </div>
</div>



@endsection
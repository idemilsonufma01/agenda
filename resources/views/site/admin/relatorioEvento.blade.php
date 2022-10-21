@extends('layouts.app')
@section('content')

<div class="container">
      <div>
          <h1 class="text-center ">Relatório de Eventos</h1>
      </div>
      <br>
      <div class="p-2 mb-3 d-flex justify-content-center">
        <label  >Data Inicial:</label>
        <input  type="date" placeholder = "Data Inicial">
        
        <label  >Data Final:</label>
        <input type="date" placeholder = "Data Final">
      </div>
      <div>
            <select class="form-select form-select-sm" >
                <option>Tipo de evento</option>
                <option>Teste1</option>
                <option>Teste2</option>
            </select>
      </div>
      <br>
      <div>
            <button class="btn btn-success">Gerar PDF</button>
            <button class="btn btn-success">Gerar Excel</button>
        </div>
      <div>
  
  </div>



@endsection
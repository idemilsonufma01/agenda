@extends('layouts.app')
@section('content')
  
    <div class="container">
      <h1>Registro de Presença</h1>
      <form  method="post"  class= "form-inline" action="{{route('presenca.mostrar')}}">
                @csrf
                <select name = "selecione" class="form-select form-select-sm w-25 mr-2" >
                      <option>Selecione evento</option>
                      <option >Selecione 1</option>
                </select>
                <input  type="text" name= "cpf" placeholder = "Digite seu CPF:" class="mr-2" >
                <button name="pesquisar" id="pesquisar" class="btn btn-secondary" href="#" >Pesquisar</button>
      </form>
      
      <br/><br/>
      <h3>Dados do Cpf informado acima</h3>
      <br/>
      <form action=''>
          @csrf
          <div id="verificar">
                <input type="text" placeholder="Nome:" disabled id="input">
                <input type="text" placeholder="Email:" disabled id="input">
                <input type="text" placeholder="Vínculo:" disabled id="input">
                <br/><br/>
                <input type="text" placeholder="Cargo:" disabled id="input">
                <input type="text" placeholder="Setor:" disabled id="input">
          </div>
          
          <br/><br/>
          <a name="presenca" id="confirmar" class="btn btn-success" href="#" role="button">Confirmar presença</a>
          <a name="presenca" id="editar" class="btn btn-warning" href="#"  role="button">Editar dados</a>
      </form>
    </div>
  
@endsection
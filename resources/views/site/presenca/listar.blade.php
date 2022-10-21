@extends('layouts.app')
@section('content')
  
    <div class="container">
      <h1>Registro de Presença</h1>
      <form class="mb-5"  method="get"  action="{{route('presenca.listar')}}">
        @csrf
                <select class="form-select form-select-sm" >
                      <option>Tipo de evento</option>
                </select>

                <input type="text" placeholder="Digite seu CPF:" value="">
                <button type="submit" name="pesquisar"  class="btn btn-secondary" href="#" >Pesquisar</button>
      </form>
      <h3>Dados do Cpf informado acima</h3>
      <br/>
      <form action=''>
          <input type="text" placeholder="Nome:" disabled = "disabled">
          <input type="text" placeholder="Email:" disabled = "disabled">
          <input type="text" placeholder="Vínculo:" disabled = "disabled">
          <br/><br/>
          <input type="text" placeholder="Cargo:" disabled = "disabled">
          <input type="text" placeholder="Setor:" disabled = "disabled">
          <br/><br/>
          <a name="presenca" id="presenca" class="btn btn-success" href="{{route('presenca.adicionar')}}" role="button">Confirmar presença</a>
          <a name="presenca" id="presenca" class="btn btn-warning" href="{{route('presenca.edit')}}" role="button">Editar dados</a>
      </form>
    </div>
  
@endsection
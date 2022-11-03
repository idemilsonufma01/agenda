@extends('layouts.app')
@section('content')
  
    <div class="container">
      <h1>Registro de Presença</h1>
      <form  class= "form-inline"  method="get"  action="{{route('presenca.mostrar')}}">
        @csrf
                <select name = "selecione" class="form-select form-select-sm w-25 mr-2" >
                      <option>Tipo de evento</option>
                </select>

                <input type="text" placeholder="Digite seu CPF:" value="{{$participante->cpf}}">
                <button type="submit" name="pesquisar"  class="btn btn-secondary" href="#" >Pesquisar</button>
      </form>
      <h3>Dados do Cpf informado acima</h3>
      <br/>
      <form method= "post" action="{{route('presenca.adicionar')}}">
                @csrf
                <input type="hidden" name="id" value="{{$participante->id}}">
                <input type="text" placeholder="Nome:" disabled = "disabled" value="{{$participante->nome}}">
                <input type="text" placeholder="Email:" disabled = "disabled" value = "{{$participante->email}}">
                <input type="text" placeholder="Vínculo:" disabled = "disabled" value = "{{$participante->vinculo}}">
                <br/><br/>
                <input type="text" placeholder="Cargo:" disabled = "disabled" value = "{{$participante->cargo}}">
                <input type="text" placeholder="Setor:" disabled = "disabled" value = "{{$participante->setor}}">
          <br/><br/>

          <button class="btn btn-success">Confirmar</button>
          <a name="presenca" id="presenca" class="btn btn-warning" href="{{route('presenca.edit',$participante->id)}}" role="button">Editar dados</a>
     
      </form>
    </div>
  
@endsection
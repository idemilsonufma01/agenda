
@extends('layouts.app')
@section('content')
<div class="container">
    <div id="agenda">
        
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModmodelalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dados do Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action='' id='formularioEvento'>
        {!! csrf_field() !!}
          <div class="form-group d-none">
            <label for="id">ID</label>
            <input type="text" class="form-control" name="" id="id" aria-describedby="helpId" placeholder="Não Obrigatório">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
          <div class="form-group">
            <label for="">Título</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escreva o titulo do evento">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>

          <div class="form-group">
            <label for="descripcion">Descrição do evento</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
          </div>

          <div class="form-group d-none">
            <label for="start">start</label>
            <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="2020-08-22">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>

          <div class="form-group d-none">
            <label for="end">end</label>
            <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="2020-08-23">
            <small id="helpId" class="form-text text-muted">Help text</small>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnSalvar">Salvar</button>
        <button type="button" class="btn btn-warning" id="btnAtualizar">Atualizar</button>
        <button type="button" class="btn btn-danger" id="btnExcluir">Excluir</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>
@endsection


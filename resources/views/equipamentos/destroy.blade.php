@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <h3>Deletar Equipamento</h3>
    <form action={{route('equipamento.destroy', ['equipamento' => $eqp->id])}} method="post">
    @csrf
    @method('DELETE')
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
    <label for="tipo">Tipo Equipamento</label>
    <input class="form-control form-control-sm" type="text" id="tipo" name="tipo" value="{{$eqp->tipo}}" disabled>
    </div>
    <div>
    <label for="modelo">Modelo Equipamento</label>
    <input class="form-control form-control-sm" type="text" id="modelo" name="modelo" value="{{$eqp->modelo}}" disabled>
    </div>
    <div>
    <label for="fabricante">Fabricante Equipamento</label>
    <input class="form-control form-control-sm" type="text" id="fabricante" name="fabricante" value="{{$eqp->fabricante}}" disabled>
    </div>
    <br>
    <div class="alert alert-danger" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão do equipamento?</div>
    <div class="form-group">
      <input class="btn btn-danger" type="submit" name="delete_eqp" value="Deletar equipamento">
      <input class="btn btn-primary" type="submit" name="cancel" value="Cancelar">
      </div>
  </div>
  </form>
</div>
@endsection
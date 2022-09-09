@extends('layouts.app')

@section('content')
<div class="container">

        <h3>Editar Equipamento</h3>
        <form action={{route('equipamento.update', ['equipamento' => $eqp])}} method="post">
            @csrf
            @method('PUT')
            <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
            <input type="hidden" id="id" name="id" value={{$eqp->id}}>
            <div>
                <label for="tipo">Tipo</label>
                <input class="form-control form-control-sm" type="text" id="tipo" name="tipo" value="{{$eqp->tipo}}">
            </div>
            <div>
                <label for="modelo">Modelo</label>
                <input class="form-control form-control-sm" type="text" id="modelo" name="modelo" value="{{$eqp->modelo}}">
            </div>
            <div>
                <label for="fabricante">Fabricante</label>
                <input class="form-control form-control-sm" type="text" id="fabricante" name="fabricante" value="{{$eqp->fabricante}}">
            </div>
            <br>
            <div class="form-group">
                <input class="btn btn-success" type="submit" name="save_eqp" value="Atualizar">
                <input class="btn btn-warning" type="submit" name="cancel" value="Cancelar">
            </div>
    </form>
</div>
@endsection
@php
$form_mode = !isset($form_mode) ? 'default' : $form_mode;
switch ($form_mode) {
case "delete":
$action=route('equipamento.destroy', ['equipamento' => $eqp->id]);
$bot_label="Deletar equipamento";
break;
case "edit":
$action=route('equipamento.update', ['equipamento' => $eqp]);
$bot_label="Atualizar equipamento";
break;
default:
$action=route("equipamento.store");
$bot_label="Salvar equipamento";
break;
}
@endphp


<form action={{$action}} method="post">
    @csrf
    @if ($form_mode == "delete")
    @method('DELETE')
    @endif
    @if ($form_mode == "edit")
    @method('PUT')
    @endif

    <div>
        <label for="tipo">Tipo Equipamento</label>
        <input  class="form-control form-control-sm" type="text" id="tipo" name="tipo" value="{{isset($eqp) ? $eqp->tipo : old('tipo')}}" {{$form_mode == "delete" ? "disabled" : ""}}>
        <br>
        @error('tipo')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="modelo">Modelo Equipamento</label>
        <input  class="form-control form-control-sm" type="text" id="modelo" name="modelo" value="{{isset($eqp) ? $eqp->modelo : old('modelo')}}" {{$form_mode == "delete" ? "disabled" : ""}}>
        <br>
        @error('modelo')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="fabricante">Fabricante Equipamento</label>
        <input  class="form-control form-control-sm" type="text" id="fabricante" name="fabricante" value="{{isset($eqp) ? $eqp->fabricante : old('fabricante')}}" {{$form_mode == "delete" ? "disabled" : ""}}>
       <br>
        @error('fabricante')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    @if ($form_mode == "delete")
        <div class="alert alert-danger" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão do equipamento?</div>
    @endif
    <br>
    <div>
        <div class="form-group">
            <input class="btn btn-success" type="submit" name="save_eqp" value="{{$bot_label}}">
            <input class="btn btn-danger" type="submit" name="cancel" value="Cancelar">
        </div>
    </div>
</form>
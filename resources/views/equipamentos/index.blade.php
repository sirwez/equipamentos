@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md">
            <h3>Listagem de Equipamentos</h3>
        </div>

        <br>
    </div>
    <div class="row">
        <table class="table table-striped">
        @if(count($equipamentos)>0)
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tipo</th>
                    <th>Modelo</th>
                    <th>Fabricante</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($equipamentos as $equipamento)
                <tr>
                    <td>{{ $equipamento->id }}</td>
                    <td>{{ $equipamento->tipo }}</td>
                    <td>{{ $equipamento->modelo }}</td>
                    <td>{{ $equipamento->fabricante }}</td>
                    <td>
                        <ul class="list-inline">
                            <li>
                            <button type="button" class="btn btn-primary">   <a href="{{route('equipamento.edit', ['equipamento' => $equipamento])}}" style="color: white;">Editar</a></button>
                             
                            </li>
                            <li>
                            <button type="button" class="btn btn-danger"> <a href="{{route('equipamento.delete', ['equipamento' => $equipamento])}}" style="color:white;">Deletar</a></button>
                               
                            </li>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </tbody>
        @else
        <p>Nenhum dado adicionado, adicione equipamentos.</p>
        @endif
        </table>
    </div>
    <div class="col-md">
            <a href="{{route('equipamento.create')}}" class="btn btn-primary">ADICIONAR</a>
        </div>
</div>
@endsection
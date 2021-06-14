
@extends('app')

@section('content')
<div id="crud" class="row">
    <div class="col-xs-12">
        <h1 class="page-header text-center"> Ventana Casos </h1>
    </div>

    <div class="col-sm-12">
        <h2>
            Listado de Casos
            <a href="#" class="add btn btn-primary pull-right" data-toggle="modal" data-target="#addcaso">
             Nuevo Caso
            </a>
        </h2>
        <table class="table table-hover table-sprite">
            <thead>
                <tr>
                    <th width="20px"> ID </th>
                    <th>Trazabilidad</th>
                    <th>Fecha Alta</th>
                    <th>Modelos</th>
                    <th width="10px">Acción</th>
                
                </tr>        
            </thead>
            <tbody>
                <tr v-for="caso in cases">
	                <td width="10px">@{{ caso.ID_CASO }}</td>
	                <td>@{{ caso.Trazabilidad_hospital }}</td>
                    <td>@{{ caso.Fecha_hora_de_alta }}</td>

                    <td width="10px">
                        <a href="#" class="btn btn-info" v-on:click="loadModels(caso)" >Listar</a>
                    </td>
                    <td width="10px">
                        <a href="#" class="btn btn-danger btn-sm" v-on:click="deleteCase(caso)">Eliminar</a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
    @include('addcaso')
</div>
@endsection











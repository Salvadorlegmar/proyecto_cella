@extends('app')

@section('content')
<div id="crud" class="row">
    <div class="col-xs-12">
        <h1 class="page-header text-center"> Ventana Modelos </h1>
    </div>

    <div class="col-sm-12">
        <h2>
            Listado de Modelos
            <!--<a href="{{ route('modelos.create') }}" class="add btn btn-primary pull-right"> Nuevo Modelo</a>-->
            <a href="#" class="add btn btn-primary pull-right" data-toggle="modal" data-target="#addmodelo"> 
            Nuevo Modelo
            </a>
        </h2>
        <table class="table table-hover table-sprite">
            <thead>
                <tr>
                    <th width="20px"> ID </th>
                    <th>Nombre</th>
                    <th>Fecha Alta</th>
                    <th>Tipo</th>
                    <th width="10px">
                        Acción    
                    </th>
                </tr>        
            </thead>
            <tbody>
                <tr v-for="modelo in models">
	                <td width="10px">@{{ modelo.ID_MODELO }}</td>
	                <td>@{{ modelo.Nombre_del_modelo }}</td>
                    <td>@{{ modelo.Fecha_hora_de_alta }}</td>
                    <td>@{{ modelo.Tipo }}</td>
                    <td width="10px">
                        <a href="#" class="btn btn-danger btn-sm" v-on:click="deleteModel(modelo)">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @include('addmodelo')
</div>
@endsection

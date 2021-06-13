@extends('app')

@section('content')
<div id="crud" class="row">
    <div class="col-xs-12">
        <h1 class="page-header text-center"> Ventana Elemtos STL </h1>
    </div>

    <div class="col-sm-12">
        <h2>
            Listado de STL's
            <a href="{{ route('modelos.create') }}" class="add btn btn-primary pull-right"> Nuevo STL</a>
        </h2>
        <table class="table table-hover table-sprite">
            <thead>
                <tr>
                    <th width="20px"> ID </th>
                    <th>Nombre</th>
                    <th>Color</th>
                    <th>Visible</th>
                    <th>Transparencia</th>
                    <th>Orden</th>
                    <th colspan="2">
                        &nbsp;    
                    </th>
                </tr>        
            </thead>
            <tbody>
                <tr v-for="stl in stls">

	                <td width="10px">@{{ modelo.ID_STL }}</td>
	                <td>@{{ modelo.Nombre_del_elemento }}</td>
                    <td>@{{ modelo.Cplor }}</td>
                    <td>@{{ modelo.Visible }}</td>
                    <td>@{{ modelo.Transparencia }}</td>
                    <td>@{{ modelo.Orden }}</td>

                    <td width="10px">
                        <a href="#" class="btn btn-danger btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>
@endsection
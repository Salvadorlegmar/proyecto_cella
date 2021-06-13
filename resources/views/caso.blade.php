
@extends('app')

@section('content')
<div id="crud" class="row">
    <div class="col-xs-12">
        <h1 class="page-header text-center"> Ventana Casos </h1>
    </div>

    <div class="col-sm-12">
        <h2>
            Listado de Casos
            <a class="add btn btn-primary pull-right" data-toggle="modal" data-target="#addCaso">
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
                    <th colspan="2">
                        &nbsp;    
                    </th>
                </tr>        
            </thead>
            <tbody>
                <tr v-for="caso in cases">
	                <td width="10px">@{{ caso.ID_CASO }}</td>
	                <td>@{{ caso.Trazabilidad_hospital }}</td>
                    <td>@{{ caso.Fecha_hora_de_alta }}</td>

                    <td width="10px">
                        <a href="#" class="btn btn-info">Listar</a>
                    </td>
                    <td width="10px">
                        <a href="#" class="btn btn-danger btn-sm" v-on:click="deleteCase(caso)">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
        @include('addCaso')
    </div>
    
</div>
@endsection










<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Casos window</title>
</head>
<body>
    <div id="main"class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header text-center"> Ventana Casos </h1>
            </div>

            <div class="col-sm-8">
                <h2>
                    Listado de Casos
                    <a href="{{ route('casos.create') }}" class="btn btn-primary pull-right"> Nuevo Caso</a>
                </h2>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="20px"> ID </th>
                            <th>Trazabilidad</th>
                            <th>Fecha Alta</th>
                            <th>Modelos</th>
                        </tr>        
                    </thead>
                    <tbody>
      
                    </tbody>
                </table>
            </div>
            <div class=col-sm-4"">
                Mensaje
            </div>

        </div>
    </div>-->

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>-->
<!--</body>
</html>-->
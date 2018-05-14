@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($tareas as $tarea)
                            <tr>
                                <td>{!! $tarea->nombre !!}</td>
                                <td>{!! $tarea->descripcion !!}</td>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <a class="btn btn-primary" href="{!! URL::to('tarea/create') !!}">Ingresar Tarea</a>
        </div>
    </div>
</div>
@endsection
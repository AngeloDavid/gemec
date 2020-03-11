@extends('base')
@section('principal')
<div class="row">

    <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">
          Lista de Mantenimientos
        </header>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Fecha</th>
              <th>Equipo</th>
              <th>Tecnico</th>
              <th>Descripcion</th>
              <th>Causa</th>
              <th>Defecto</th>
              <th>Tratamiento</th>
              <th>Estado</th>
            </tr>
          </thead>
          <tbody>
              @forelse ($list as $item)
              <tr>
                <td> {{$loop->index +1 }}</td>
                <td> {{$item->date}}</td>
                <td> {{$item->id_equi}}</td>
                <td>{{$item->id_tecn}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->cause}}</td>
                <td>{{$item->defect}}</td>
                <td>{{$item->treatment}}</td>
                <td>{{$item->status}}</td>

                <td>
                    @switch($item->status)
                        @case('OK')
                            <span class="label label-success">
                            @break
                        @case('TERMINADO')
                            <span class="label label-warning">
                            @break
                        @case('EN PROCESO')
                            <span class="label label-warning">
                            @break
                        @case('POR_EMPEZAR')
                            <span class="label label-danger">
                            @break
                        @default

                    @endswitch
                    {{$item->status}}</span>
                <td>
                    <div class="btn-group">
                    <a href="{{ url('mantenimiento/'.$item->id.'/edit')}}" class="btn btn-info">Editar</a>
                        <a  class="btn btn-danger">Eliminar</a>
                      </div>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="12">No hay registros</td>
              </tr>
              @endforelse

          </tbody>
        </table>
      </section>
    </div>
  </div>
@endsection

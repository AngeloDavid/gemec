@extends('base')
@section('principal')
<div class="row">

    <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">
          Lista de Equipos
        </header>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Tipo</th>
              <th>Marca </th>
              <th>Serie</th>
              <th>Descripcion</th>
              <th>Caracteristicas</th>
              <th>Estado<th>Descripcion</th></th>
            </tr>
          </thead>
          <tbody>
              @forelse ($list as $item)
              <tr>
                <td> {{$loop->index +1 }}</td>
                <td> {{$item->idtype }}</td>
                <td> {{$item->marca }}</td>
                <td>{{$item->serie}}</td>
                <td>{{$item->description}}</td>
                <td>
                    <ul>
                        <li> CPU: {{$item->CPU}}</li>
                        <li> RAM: {{$item->RAM}}</li>
                        <li> DISK: {{$item->DISK}}</li>
                        <li> Año: {{$item->ano}}</li>
                        <li> Color: {{$item->color}}</li>
                        <li> SO: {{$item->SO}}</li>
                    </ul>
                </td>
                <td>
                    @switch($item->status)
                        @case('OK')
                            <span class="label label-success">
                            @break
                        @case('DESACTUALIZADO')
                            <span class="label label-warning">
                            @break
                        @case('EN_REPARACION')
                            <span class="label label-warning">
                            @break
                        @case('DAÑADO')
                            <span class="label label-danger">
                            @break
                        @case('DEBAJA')
                            <span class="label label-info">
                            @break
                        @default

                    @endswitch
                    {{$item->status}}</span>
                <td>
                    <div class="btn-group">
                    <a href="{{ url('tipo/'.$item->id.'/edit')}}" class="btn btn-info">Editar</a>
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

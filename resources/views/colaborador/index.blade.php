@extends('base')
@section('principal')
<div class="row">

    <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">
          Lista de Colaboradores
        </header>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Cargo</th>
              <th>Area</th>
              <th>Estado</th>
              <th>ACCION</th>
            </tr>
          </thead>
          <tbody>
              @forelse ($list as $item)
              <tr>
                <td> {{$loop->index +1 }}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->cargo}}</td>
                <td>{{$item->area}}</td>
                <td> @if ($item->status == '1')
                    <span class="label label-success">Activo</span>
                @else
                    <span class="label label-danger">Inactivo</span>
                @endif</td>
                <td>
                    <div class="btn-group">
                    <a href="{{ url('colaborador/'.$item->id.'/edit')}}" class="btn btn-info">Editar</a>
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

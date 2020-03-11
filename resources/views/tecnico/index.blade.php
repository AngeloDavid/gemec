@extends('base')
@section('principal')
<div class="row">

    <div class="col-sm-12">
      <section class="panel">
        <header class="panel-heading">
          Lista de Técnico
        </header>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombres</th>
              <th>Rol</th>
              <th>Estado</th>

            </tr>
          </thead>
          <tbody>
              @forelse ($list as $item)
              <tr>
                <td> {{$loop->index +1 }}</td>
                <td>{{$item->name}}</td>

                <td>{{$item->rol}}</td>
                <td> @if ($item->status == '1')
                    <span class="label label-success">Activo</span>
                @else
                    <span class="label label-danger">Inactivo</span>
                @endif</td>
                <td>
                    <div class="btn-group">
                    <a href="{{ url('tecnico/'.$item->id.'/edit')}}" class="btn btn-info">Editar</a>
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

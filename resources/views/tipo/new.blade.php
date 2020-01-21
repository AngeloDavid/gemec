@extends('base')
@section('principal')
<div class="row">
    <div class="col-lg-6">
        <section class="panel">
          <header class="panel-heading">
            Nuevo Tipo
          </header>
          <div class="panel-body">
            <form role="form" novalidate="" method="POST"  action="{{url($urlForm)}}" >
                {!! csrf_field() !!}
                 @if (!$isnew)
                    {{ method_field('PUT') }}
                 @endif
              <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="">
              </div>
              <div class="checkbox">
                <label>
                    @if ($isnew)
                        <input type="checkbox" value="1" name = "status" checked> Habilitado
                    @else
                        <input type="checkbox" name = "status" > Habilitado
                    @endif

                </label>
              </div>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

          </div>
        </section>
      </div>
</div>
@endsection

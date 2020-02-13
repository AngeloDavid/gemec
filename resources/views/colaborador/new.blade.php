@extends('base')
@section('principal')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Nuevo Colaborador
          </header>
          <div class="panel-body">
            <form role="form" novalidate="" method="POST"  action="{{url($urlForm)}}" >
                {!! csrf_field() !!}
                 @if (!$isnew)
                    {{ method_field('PUT') }}
                 @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name',$item->name)}}" placeholder="">
                    </div>
                </div>
            </div>
              <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cargo</label>
                        <input type="text" class="form-control" id="cargo" name="cargo" value="{{old('cargo',$item->cargo)}}" placeholder="">
                      </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Area <i>{{ $item->area}}</i></label>
                        <select id="area" name="area" multiple=""  class="form-control">
                            <option value="AYB">AYB</option>
                            <option value="TENIS">TENIS</option>
                            <option value="SQUASH">SQUASH</option>
                            <option value="GYM">GYM</option>
                            <option value="NATACION">NATACION</option>
                            <option value="HIPICO">HIPICO</option>
                            <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                            <option value="SPA">SPA</option>
                            <option value="RRHH">RRHH</option>
                            <option value="CONTABILIDAD">CONTABILIDAD</option>
                            <option value="SISTEMAS">SISTEMAS</option>
                            <option value="BODEGA">BODEGA</option>
                            <option value="COMUNICACIONES">COMUNICACIONES</option>
                        </select>
                      </div>
                  </div>
              </div>
              <div class="row">
              <div class="col-lg-12">
                <div class="checkbox">
                    <label>
                        @if (!$isnew)
                            @if ($item->status)
                                <input type="checkbox" id="status"  name = "status" value="{{old('name',$item->status)}}"  checked > Habilitado
                            @else
                                <input type="checkbox" id="status" name = "status" value="{{old('name',$item->status)}}" > Habilitado
                            @endif

                        @endif
                    </label>
                  </div>
              </div>
              </div>

              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

          </div>
        </section>
      </div>
</div>
@endsection

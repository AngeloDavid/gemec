@extends('base')
@section('principal')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Nuevo Equipo
          </header>
          <div class="panel-body">
            <form role="form" novalidate="" method="POST"  action="{{url($urlForm)}}" >
                {!! csrf_field() !!}
                 @if (!$isnew)
                    {{ method_field('PUT') }}
                 @endif
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tipo</label>
                        <select class="form-control m-bot15">
                            @foreach ($listType as $item)
                                <option value="{{$item->id}}" >{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descripcion</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{old('description',$item->description)}}" placeholder="">
                    </div>
                </div>
            </div>
              <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Serial</label>
                        <input type="text" class="form-control" id="serie" name="serie" value="{{old('serie',$item->serie)}}" placeholder="">
                      </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" value="{{old('marca',$item->marca)}}" placeholder="">
                      </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Año</label>
                        <input type="text" class="form-control" id="ano" name="ano" value="{{old('ano',$item->ano)}}" placeholder="">
                      </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Color</label>
                        <input type="text" class="form-control" id="color" name="color" value="{{old('ano',$item->ano)}}" placeholder="">
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">CPU</label>
                        <select multiple="" class="form-control">
                            <option>CORE I7</option>
                            <option>CORE I5</option>
                            <option>CORE I3</option>
                            <option>PENTIUM</option>
                            <option>CELETRON</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">RAM</label>
                        <select multiple="" class="form-control">
                            <option>16GB</option>
                            <option>12GB</option>
                            <option>8GB</option>
                            <option>4GB</option>
                            <option>2GB</option>
                            <option>1GB</option>
                            <option>512MB</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sistema Operativo</label>
                        <select multiple="" class="form-control">
                            <option>Windows 10</option>
                            <option>Windows 7</option>
                            <option>Windows xp</option>
                            <option>Linux</option>
                            <option>Mac</option>
                            <option>otros</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Disco Duro</label>
                        <input type="text" class="form-control" id="DISK" name="DISK" value="{{old('DISK',$item->DISK)}}" placeholder="">
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Colaborador</label>
                        <select class="form-control m-bot15">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
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

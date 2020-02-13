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
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tipo</label>
                        <select name="id_type" class="form-control m-bot15">
                            @foreach ($listType as $item)
                                <option value="{{$item->id}}" >{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">CODIGO AF</label>
                        <input type="text" class="form-control" id="codeaf" name="codeaf" value="{{old('codeaf',$item->codeaf)}}" placeholder="">
                    </div>
                </div>
                <div class="col-lg-6">
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
                        <select name="CPU" multiple="" class="form-control">
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
                        <select name="RAM" multiple="" class="form-control">
                            <option value="16">16GB</option>
                            <option value="12">12GB</option>
                            <option value="8">8GB</option>
                            <option value="4">4GB</option>
                            <option value="2">2GB</option>
                            <option value="1" >1GB</option>
                            <option value="0.5" >512MB</option>
                        </select>
                      </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sistema Operativo</label>
                        <select name="SO" multiple="" class="form-control">
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
                        <label for="exampleInputEmail1">Disco Duro (GB)</label>
                        <input type="number" class="form-control" id="DISK" name="DISK" value="{{old('DISK',$item->DISK)}}" placeholder="">
                      </div>
                  </div>
              </div>
              <h4>Datos de RED</h4>
              <hr>
              <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">IP</label>
                        <input type="text" class="form-control" id="ip" name="ip" value="{{old('marca',$item->marca)}}" placeholder="">
                      </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">MAC</label>
                        <input type="text" class="form-control" id="mac" name="mac" value="{{old('marca',$item->marca)}}" placeholder="">
                      </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Colaborador</label>
                        <select name="id_colla" class="form-control m-bot15">
                            @foreach ($listCol as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
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

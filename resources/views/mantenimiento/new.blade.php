@extends('base')
@section('principal')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Nuevo Mantenimiento
          </header>
          <div class="panel-body">
            <form role="form" novalidate="" method="POST"  action="{{url($urlForm)}}" >
                {!! csrf_field() !!}
                 @if (!$isnew)
                    {{ method_field('PUT') }}
                 @endif
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Equipo</label>
                        <select description="id_equi" class="form-control m-bot15">
                            @foreach ($listEqui as $mantenimiento)
                                <option value="{{$mantenimiento->id}}" >{{$mantenimiento->description}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tecnico</label>
                            <select name="id_tecn" class="form-control m-bot15">
                                @foreach ($listTec as $mantenimiento)
                                    <option value="{{$mantenimiento->id}}">{{$mantenimiento->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
            </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fecha</label>
                        <input type="text" class="form-control" id="date" name="date" value="{{old('date',$item->date)}}" placeholder="">
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
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Causa</label>
                        <input type="text" class="form-control" id="cause" name="cause" value="{{old('cause',$item->cause)}}" placeholder="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Defecto</label>
                        <input type="text" class="form-control" id="defect" name="defect" value="{{old('defect',$item->defect)}}" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tratamiento</label>
                        <input type="text" class="form-control" id="treatment" name="treatment" value="{{old('treatment',$item->treatment)}}" placeholder="">
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tipo</label>
                            <select name="type" multiple="" class="form-control">
                                <option>PREVENTIVO</option>
                                <option>CORRECTIVO</option>
                                <option>INSTALACIÓN</option>
                                <option>CONFIGURACIÓN</option>
                                <option>DIAGNÓSTICO</option>
                            </select>
                          </div>
                      </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Estado</label>
                                <select name="status" multiple="" class="form-control">
                                    <option>TERMINADO</option>
                                    <option>EN PROCESO</option>
                                    <option>POR EMPEZAR</option>
                                </select>
                              </div>
                          </div>
                        </div> </div>
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

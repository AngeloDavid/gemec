@extends('base')
@section('principal')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Nuevo Técnico
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
                            <label for="exampleInputEmail1">User</label>
                            <input type="text" class="form-control" id="username" name="username" value="{{old('username',$tecnico->username)}}" placeholder="Username" required>
                        </div>
                    </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre y Apellido</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name',$tecnico->name)}}" placeholder="">
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-4"
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{old('password',$tecnico->password)}}" placeholder="Password">
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-4"
                        <div class="form-group">
                            <label for="exampleInputEmail1">Confirm Password</label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword" value="{{old('cpassword',$tecnico->cpassword)}}" placeholder="Confirm Password">
                        </div>
                    </div>
       <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Rol<i>{{ $tecnico->rol}}</i></label>
                        <select id="rol" name="rol" multiple=""  class="form-control">
                            <option value="Supervisor">Supervisor</option>
                            <option value="Tecnico">Técnico</option>
                        </select>
                </div>
            </div>
        </div>
              <div class="row">
                <div class="col-lg-8">
                  <div class="checkbox">
                    <label>
                        @if (!$isnew)
                            @if ($tecnico->status)
                                <input type="checkbox" id="status"  name = "status" value="{{old('name',$tecnico->status)}}"  checked > Habilitado
                            @else
                                <input type="checkbox" id="status" name = "status" value="{{old('name',$tecnico->status)}}" > Habilitado
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

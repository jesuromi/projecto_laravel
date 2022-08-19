@extends('dashboard')

@section('container')


<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> {{$title}}</h1>
        @isset($subtitle)
        <p>{{$subtitle}}</p>
        @endisset
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="">Clientes</a></li>
    </ul>
</div>
    
<div class = 'row'>
<div class="col-lg-6 col-md-12 col-xs-12 col-xs-12">
          <div class="tile">
            <h3 class="tile-title">Registrar</h3>
            <div class="tile-body">

            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif

              <form class="form-horizontal" method = 'POST' action = "{{route('clients.store')}}">
                {{csrf_field()}}
                <div class="form-group row">
                  <label class="control-label col-md-3">Nombre</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name = 'name' value = "{{old('name')}}">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3">Apellido</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name = 'lastname' value = "{{old('lastname')}}">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3">Edad</label>
                  <div class="col-md-8">
                    <input class="form-control" type="number" name = 'age' value = "{{old('age')}}">
                  </div>
                </div>
                @if(session()->has('message'))
                <div class = 'alert alert-success'>{{session()->get('message')}}</div>
                @else
                @endif
                <div class="tile-footer">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                        <button class="btn btn-primary mr-2" type="submit"><i class="fa fa-check-circle"></i>Register</button><a class="btn btn-warning" href="{{route('clients.index')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Regresar</a>
                        </div>
                    </div>
                </div>


              </form>
            </div>
            
          </div>
        </div>

</div>


@endsection
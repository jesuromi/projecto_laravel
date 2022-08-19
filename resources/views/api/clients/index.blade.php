@extends('dashboard')

@section('container')


<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> {{$title}}</h1>
        <p>{{$subtitle}}</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="">Clientes</a></li>
    </ul>
</div>
      
<div class = 'row'>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">{{$title}} <a href="{{route('clients.create')}}"><button class = 'btn btn-primary'>Nuevo Registro</button></a> </h3>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Apellido</th>
                  <th>Nombre</th>
                  <th>Edad</th>
                </tr>
              </thead>

              <tbody>
                @foreach($clients as $client)
                  <tr>
                      <td>{{$client->id}}</td>
                      <td>{{$client->lastname}}</td>
                      <td>{{$client->name}}</td>
                      <td>{{$client->age}}</td>

                  </tr>
                @endforeach               
              </tbody>

            </table>
          </div>
        </div>
</div>


@endsection


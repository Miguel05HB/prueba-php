@extends('home')

@section('content')

<div
    class="row"
>
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h2 class="text-center">Lista de Clientes</h2>
        <br>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
            Nuevo Cliente
          </button>
          <br><br>
        <div
            class="table-responsive"
        >
            <table
                class="table"
            >
                <thead class="bg-dark text-white text-center">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Ubigeo</th>
                        <th scope="col">Dni</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($clientes as $client)
                    <tr class="">
                        <td scope="row">{{$client->id}}</td>
                        <td>{{$client->nombres}}</td>
                        <td>{{$client->apellidos}}</td>
                        <td>{{$client->ubigeo}}</td>
                        <td>{{$client->dni}}</td>
                        <td>{{$client->direccion}}</td>
                        <td>{{$client->telefono}}</td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$client->id}}">
                                Editar
                              </button>
                              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$client->id}}">
                                Eliminar
                              </button>
                        </td>

                    </tr>
                    @include('client.info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('client.create')
        
    </div>
    <div class="col-md-2"></div>
</div>


@endsection
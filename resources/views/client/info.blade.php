
<div class="modal fade" id="edit{{$client->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Datos del Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('home.update', $client->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombres</label>
            <input
                type="text"
                class="form-control"
                name="nombres"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$client->nombres}}"
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input
                type="text"
                class="form-control"
                name="apellidos"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$client->apellidos}}"
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Ubigeo</label>
            <input
                type="text"
                class="form-control"
                name="ubigeo"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$client->ubigeo}}"
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Dni</label>
            <input
                type="text"
                class="form-control"
                name="dni"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$client->dni}}"
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Dirección</label>
            <input
                type="text"
                class="form-control"
                name="direccion"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$client->direccion}}"
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input
                type="text"
                class="form-control"
                name="telefono"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$client->telefono}}"
            />
          </div>
          
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>


  {{-- Apartado DELETE --}}


  
  <div class="modal fade" id="delete{{$client->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('home.destroy', $client->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
        <div class="modal-body">
          <p>Estas Seguro de eliminar al cliente <strong>{{$client->nombres}}?</strong></p>
        </div>
         
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
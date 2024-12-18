
<div class="container-fluid">
<x-app-layout>
</x-app-layout>
<div class="row">
    <div class="col-6 offset-3">
          <!-- Button trigger modal -->
            <button type="button" class="btn my-2  btn-danger w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                CREAR NUEVA PROPIEDAD
            </button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear nueva propiedad</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form enctype="multipart/form-data" method="POST"  action="{{ route('propiedades.create') }}">
        @csrf
        <h1 class="text-bold my-1">Crear Nueva propiedad</h1>
        <h2 class="text-bold my-1">Datos de contacto</h2>
        <input class="form-control mt-2" type="text" name="nombre_contacto" placeholder="Lionel Scaloni">
            <input class="form-control mt-2" type="email" name="email_contacto" placeholder="fulanito@gmail.com">
            <input class="form-control mt-2" type="text" name="telefono_contacto" placeholder="2625525243">
        
        <h2 class="text-bold my-1">Datos de la propiedad</h2>
        
        <input type="text" class="form-control mt-2" name="titulo" placeholder="ingresa el titulo ej:amplio departamento en general alvear">
        <label for="operacion" class="form-label mt-2">TIPO DE PROPIEDAD</label>

        <select class="  form-select" name="tipo" name="tipo" >
                <option value="CASA">CASA</option>
                <option value="DEPARTAMENTO">DEPARTAMENTO</option>
                <option value="TERRENO">TERRENO</option>
                <option value="LOCAL COMERCIAL">LOCAL COMERCIAL</option>
                <option value="CABAÑAS">CABAÑAS</option>
            </select>
            <label for="operacion" class="form-label mt-2">TIPO DE OPERACION</label>
            <select class="  form-select" name="operacion" name="operacion" >
                <option value="VENTA">VENTA</option>
                <option value="ALQUILER">ALQUILER</option>
                <option value="ALQUILER CON OPCION DE COMPRA">ALQUILER CON OPCION DE COMPRA</option>
            </select>
            <input class="form-control mt-2" type="text" name="forma_de_pago" placeholder="describe las formas de pago">

            <input class="form-control mt-2" type="text" name="metraje" placeholder="describe el metraje de la propiedad ej :2500 m2 cubiertos">
            <input class="form-control mt-2" type="text" name="habitaciones" placeholder="describe las habitaciones">
            <input class="form-control mt-2" type="text" name="baños" placeholder="describe los baños ej: 1 baño con ducha ">
            <input class="form-control mt-2" type="text" name="cochera" placeholder="describe la cochera ej: 1 garage techado ">
            <input class="form-control mt-2" type="text" name="descripcion_detallada" placeholder="describe la propiedad ">
            <input class="form-control mt-2" type="file" name="fotos[]" multiple placeholder="cargue las fotos">
            <input class="form-control mt-2" type="file" name="video" placeholder="cargue el video de la propiedad">
            <input class="form-control mt-2 py-4" type="checkbox" name="publicada" placeholder="Publicar ">

            <input type="submit" class="btn btn-danger p-2 my-3 " value="NUEVA PROPIEDAD">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

        </form>
      </div>
    </div>
  </div>
</div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">tipo</th>
      <th scope="col">Operación</th>
      <th scope="col">Acción</th>

    </tr>
  </thead>
  @if(isset($propiedades))
                        <tbody class="bg-white divide-y divide-gray-200 text-black">
                            @foreach ($propiedades as $propiedad)
                                <tr>
                                    <td scope="row" class="px-6 py-4 whitespace-nowrap">
                                        {{ $propiedad->titulo }}
                                    </td>
                                    <td scope="row" class="px-6 py-4 whitespace-nowrap">
                                        {{ $propiedad->tipo }}
                                    </td>
                                    <td scope="row" class="px-6 py-4 whitespace-nowrap">
                                        {{ $propiedad->operacion }}
                                    </td>
                                  
                                    <td scope="row" class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('propiedades.edit', $propiedad->titulo) }}" class="text-red-600 hover:text-indigo-900">Editar</a>
                                        <a target="blank" href="{{ route('propiedades.show', $propiedad->titulo) }}" class="text-gray-600 hover:text-gray-900 ml-4">Ver</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        @endif    
</table>
</div>
@extends('layouts.app')

<div class="container mx-auto py-12 ">
<div class="modal fade " id="borrarimagenmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img  id="imagenborrar"  alt="">
        <input type="hidden" id=idimagenborrar   >
    
    </div>
    <div class="modal-footer">
                    <div class="row">
                        <div class="col-6 text-center">
                            <button onclick="confirmarborrarfoto()" data-bs-dismiss="modal" class="btn btn-danger">Confirmar borrar foto</button>
                        </div>
                        <div class="col-6 text-center">
                            <button class="btn btn-outline-danger" data-bs-dismiss="modal">cancelar borrar foto</button>
                        </div>

                    </div>
                </div>

   
    </div>
  </div>
</div>
<h1 class="text-bold my-1">Editar propiedad</h1>

<div class="row">
    <div class="col-12">
      @if(sizeof($propiedad->galerias)>0)
        <div class="row">
            <div class="col-12">
            <h1 class="text-bold my-1">Galeria</h1>

            </div>
        </div>
      @endif
        <div class="row">
        @foreach($propiedad->galerias as $foto)
            <div class="col-3">
                <div class="row">
                    <div class="col-12">   
                         <img id="imagen{{$foto->id}}" src="{{$foto->imagen}}" class="w-100" alt="">
                    </div>
                    <div class="col-12">
                        <a id="btnimagen{{$foto->id}}" onclick="borrarfoto('{{$foto->imagen}}','{{$foto->id}}')" data-bs-target="#borrarimagenmodal" data-bs-toggle="modal" class="btn btn-danger w-100">Eliminar foto</a>
                    </div>
                </div>
            </div>
        @endforeach
  
        </div>
    </div>
</div>

<div class="row">
    
            <form class="col-12" enctype="multipart/form-data" method="POST"  action="{{ route('propiedades.editar') }}">
        @csrf
        <div class="row">
          <div class="col-6">
              
          <h2 class="text-bold my-1 mt-2">Datos del propietario</h2>
          <label for="titulo" class="form-label">PROPIETARIO</label>
          <input class="form-control mt-2" value="{{ $propiedad->nombre_contacto}}" type="text" name="nombre_contacto" placeholder="Lionel Scaloni">
          <label for="titulo" class="form-label">EMAIL</label>
          <input class="form-control mt-2" type="email" value="{{ $propiedad->email_contacto }}" name="email_contacto" placeholder="fulanito@gmail.com">
          <label for="titulo" class="form-label">TELEFONO</label>
          <input class="form-control mt-2" type="text" value="{{ $propiedad->telefono_contacto }}" name="telefono_contacto" placeholder="2625525243">  
         </div>
        <div class="col-6">
        <h2 class="text-bold my-1 mt-2">Datos de la propiedad</h2>
        <input  type="hidden"  value="{{ $propiedad->id }}" name="id_propiedad" >
        <label for="titulo" class="form-label">TITULO</label>
        <input type="text" value="{{ $propiedad->titulo }}" class="form-control mt-2" name="titulo" placeholder="ingresa el titulo ej:amplio departamento en general alvear">
        <label for="operacion" class="form-label mt-2">TIPO DE PROPIEDAD</label>

        <select class="form-select" value="{{ strtoupper($propiedad->tipo) }}" name="tipo" name="tipo" >
                <option value="CASA">CASA</option>
                <option value="DEPARTAMENTO">DEPARTAMENTO</option>
                <option value="TERRENO">TERRENO</option>
                <option value="LOCAL COMERCIAL">LOCAL COMERCIAL</option>
                <option value="CABAÑAS">CABAÑAS</option>
            </select>
            <label for="operacion"  class="form-label mt-2">TIPO DE OPERACION</label>
            <select class="  form-select"  value="{{ strtoupper($propiedad->operacion) }}" name="operacion" name="operacion" >
                <option value="VENTA">VENTA</option>
                <option value="ALQUILER">ALQUILER</option>
                <option value="ALQUILER CON OPCION DE COMPRA">ALQUILER CON OPCION DE COMPRA</option>
            </select>
            <label for="formas_de_pago"  class="form-label mt-2">FORMAS DE PAGO</label>
            <input class="form-control mt-2" type="text"  value="{{ $propiedad->forma_de_pago }}" name="forma_de_pago" placeholder="describe las formas de pago">
          
            <label for="metraje"  class="form-label mt-2">METRAJE</label>
            <input class="form-control mt-2" type="text" value="{{ $propiedad->metraje }}"  name="metraje" placeholder="describe el metraje de la propiedad ej :2500 m2 cubiertos">
            <label for="habitaciones"  class="form-label mt-2">HABITACIONES</label>

            <input class="form-control mt-2" type="text" value="{{ $propiedad->habitaciones }}" name="habitaciones" placeholder="describe las habitaciones">
            <label for="baños"  class="form-label mt-2">BAÑOS</label>

            <input class="form-control mt-2" type="text" value="{{ $propiedad->baños }}" name="baños" placeholder="describe los baños ej: 1 baño con ducha ">
            <label for="formas_de_pago"  class="form-label mt-2">COCHERAS</label>

            <input class="form-control mt-2" type="text" value="{{ $propiedad->cochera }}" name="cochera" placeholder="describe la cochera ej: 1 garage techado ">
            
            <label for="descripcion"  class="form-label mt-2">DESCRIPCION</label>
            <input class="form-control mt-2" type="text" value="{{ $propiedad->descripcion_detallada }}" name="descripcion_detallada" placeholder="describe la propiedad ">
            
            <label for="formas_de_pago"  class="form-label mt-2">FOTOS NUEVAS</label>
            <input class="form-control mt-2" type="file"  name="fotos[]" multiple placeholder="cargue las fotos nuevas">
            <input class="form-control mt-2" type="file" value="{{ $propiedad->video }}" name="video" placeholder="cargue el video de la propiedad">
            <label for="publicada">MARQUE LA CASILLA PARA QUE QUEDE PUBLICADA</label>
            @if($propiedad->publicada)
            <input class="form-control mt-2 py-4" type="checkbox" value="checked" name="publicada" placeholder="Publicar ">
            @else
            <input class="form-control mt-2 py-4" type="checkbox"  name="publicada" placeholder="Publicar ">

            @endif
            <input type="submit" class="btn btn-danger p-2 my-3 " value="Guardar propiedad">
            <a href="https://elidatorresinmobiliaria.com.ar/dashboard" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>
            </div>
        </div>
        </form>
      </div>
      <form id="myForm" method="POST">
    @csrf
    </form>

<style>
    section{
        display: flex;
        width: 600px;
        height: 430px;
    }
    section img{
        width: 0;
        flex-grow: 1;
        opacity: .8;
        transition: .5s ease;
        object-fit: cover;
    }
    section img:hover{
        cursor: crosshair;
        width: 300px;
        opacity: 1;
        filter: contrast(100%);
    }
</style>

<script>
    function borrarfoto(imagen,idimagen){
    document.getElementById("imagenborrar").src=imagen
     document.getElementById("idimagenborrar").value=idimagen
        
    }
        function confirmarborrarfoto(){
        const id = document.getElementById("idimagenborrar").value;

// URL de tu API (reemplaza con la URL correcta)
const apiUrl = 'https:/elidatorresinmobiliaria.com.ar/api/borrarimagen';

// Datos a enviar en el cuerpo de la petición
const data = { id: id };
const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

// Opciones de la petición
const options = {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
    'X-CSRF-TOKEN': csrfToken

  },
  body: JSON.stringify(data)
};

fetch(apiUrl, options)
  .then(response => {
    if (!response.ok) {
      throw new Error('Hubo un error al borrar, intente nuevamente ');
    }
    return response.json();
  })
  .then(data => {
    if (data.respuesta==1) {
      // La API devolvió true, realiza la acción deseada
      document.getElementById("imagen"+id).style.display="none"
      document.getElementById("btnimagen"+id).style.display="none"

      document.getElementById("imagenborrar").src=''

      alert('Imagen eliminada correctamente');
      // Aquí puedes agregar tu código para mostrar un mensaje al usuario,
      // recargar la página, o realizar cualquier otra acción
    } else {
      alert('Error al eliminar la imagen');
      // Manejar el error, por ejemplo, mostrar un mensaje de error al usuario
    }
  })
  .catch(error => {
    console.error('There has been a problem with your fetch operation:', error);
  });
        }


</script>
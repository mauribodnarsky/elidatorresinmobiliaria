@extends('layouts.app')

<div class="container mx-auto py-12 ">
    <div class="row">
        <div class="col-12">
            <div class="row" id="preview">
                <div class="col-12">
                    <div class="row">
                    <div class="col-12 ">
                        <div class="row">
                        <div class="col-6 text-center">
                            <img src="https:/elidatorresinmobiliaria.com.ar/storage/elidalogolimpio.png"  width="250"  alt="">
                            </div>              

                            <div class="col-6 d-flex align-items-center">
                                <h1 class="text-2xl   font-bold my-auto">{{ $propiedad->titulo }}</h1>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                            <div class="col-12 col-md-6">
                        <div class="row">
                            
                        <div class="col-12 d-flex">    
                            <h2 class="text-gray-700">                            {{ $propiedad->tipo }}</h2>   
                            <h2 class="text-gray-700">                         {{ $propiedad->operacion }}</h2>
                            </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                        
                            <h4 class="text-white bg-danger py-2 px-1">Habitaciones:
                            {{ $propiedad->habitaciones }}</h4>
                            </div>
                            
                        <div class="col-12 d-flex">
                        
                            <h4 class="text-white bg-danger py-2 px-1">Baños:
                            {{ $propiedad->baños }}</h4>
                            </div>
                            
                        <div class="col-12 d-flex">
                        
                            <h4 class="text-white bg-danger py-2 px-1">Superficie:{{ $propiedad->metraje }}</h4>
                            </div>
                            
                        <div class="col-12 d-flex">
                        
                             <h4 class="text-white bg-danger py-2 px-1">Cocheras:
                            {{ $propiedad->cocheras }}</h4>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="col-12 d-flex">
                        
                            <h4 class="text-white bg-danger py-2 px-1">Formas de pago:  {{ $propiedad->forma_de_pago }}</h4>
                            </div>
                        <div class="col-12 d-flex">
                        
                            <h4 class="text-white bg-danger py-2 px-1">Descripción:
                            {{ $propiedad->descripcion_detallada }}</h4>
                            </div>
               
                            </div>
                            
                            </div>
                 
                 <div class="row">
                    <div class="col-12">
                    <section >
                    @foreach($propiedad->galerias as $foto)
                        <img src="{{$foto->imagen}}" alt="">
                        @endforeach
  
                    </section>
                    </div>
                 </div>
                    </div>
                </div>   
         
                </div>
        </div>
    </div>
</div>
<div class="preview-container" id="previewContainer">
    <div id="preview">
    </div>
    <button onclick="downloadPropiedad('{{json_encode($propiedad)}}')">Descargar Imagen</button>
  </div>


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


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>


    function downloadPropiedad(propiedad) {
      // En este punto, podrías implementar la lógica para convertir la vista previa en una imagen JPG.
      // Puedes utilizar bibliotecas como html2canvas para esto.
      // Aquí está el enlace a la biblioteca html2canvas: https://html2canvas.hertzen.com/

      // Aquí puedes agregar el código para convertir la vista previa en una imagen y descargarla.
      // Ejemplo:
      let propiedadparam=JSON.parse(propiedad);
       html2canvas(document.getElementById("preview")).then(canvas => {
         const image = canvas.toDataURL("image/jpeg");
         const link = document.createElement("a");
         link.href = image;
         link.download = propiedadparam.titulo+".jpg";
         link.click();
       });

      // Por ahora, solo ocultaremos la vista previa.
      const previewContainer = document.getElementById("previewContainer");
      previewContainer.style.display = "none";
    }
  </script>
<style>
    #preview{
        background: #e7d5d5;

    }
</style>
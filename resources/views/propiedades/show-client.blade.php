<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Elida torres inmobiliaria') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased">
<div class="container mx-auto py-12 ">
    <div class="row">
        <div class="col-12">
            <div class="row" id="preview">
                <div class="col-12">
                    <div class="row">
                    <div class="col-12 ">
                        <div class="row">
                        <div class="col-6 text-center">
                            <img src="http://127.0.0.1:8000/storage/elidalogolimpio.png"  width="250"  alt="">
                            </div>              

                            <div class="col-6 mt-2 d-flex align-items-center">
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
                            <div class="col-12 d-flex">
                        
                        <h4 class="text-white bg-danger py-2 px-1">Comodidades:
                        {{ $propiedad->comodidades }}</h4>
                        </div>
           
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
                <div class="row">
                    <div class="col-8 offset-2 mt-2">
                        <video src="{{$propiedad->video}}" autoplay class="w-100   "></video>
                    </div>
                 </div>

        </div>
    </div>
</div>


<style>
    section{
        display: flex;
        width: 80VW;
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


</style>

</div>
    </body>
</html>

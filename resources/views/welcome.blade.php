<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Elida torres inmobiliaria</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="http://127.0.0.1:8000/storage/elidalogolimpio.png"  width="250"  alt=""></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/">Oportunidades</a>
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Propiedades
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/filtrar/alquiler/*">Alquileres</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/filtrar/alquiler/casa">Casas</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/filtrar/alquiler/departamento">Departamentos</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/filtrar/alquiler/otro">Otro</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/filtrar/venta/*">Ventas</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/filtrar/venta/casa">Casas</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/filtrar/venta/departamento">Departamentos</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/filtrar/venta/otro">Otro</a></li>

        </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#tasaciones">Tasaciones</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="#contacto">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<header class="row header d-flex align-items-center ">
<div class="col-md-4 col-4 text-center">
            <img src="http://127.0.0.1:8000/storage/agenteinmobiliaria.png" class="w-100 " alt="">
            </div>

<div class="col-md-8 col-8 bg-danger border-danger rounded-pill border   titulo  opacity-50 p-5 text-white">
                <h1  >ELIDA TORRES INMOBILIARIA</h1>
                <H5>Somos una empresa dedicada a la venta , alquiler,  administración y tasación de bienes inmuebles, al servicio de los mendocinos y todas las personas que necesiten nuestros servicios. Eficientes , confiables y con mucha seriedad a la hora de realizar sus inversiones.Nuestra trayectoria en el mercado nos avala.</H5>
            </div>
      
        </header>
                        @if(isset($propiedades))
                        <div class="row bg-white ">
                            <div class="col-12">
                            <H2 class="text-bold h1 py-4    ">Últimas Oportunidades</H2>

                            @if(isset($tipo) && isset($operacion))

                            <H2 class="text-bold h1 ">Búsqueda :  {{$operacion}} | {{$tipo}}</H2>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($propiedades as $propiedad)
                                <div class="col-sm-6 col-12  col-md-4 col-lg-3 mt-1 propiedad bg-white" onclick="verpropiedad('{{json_encode($propiedad)}}')" data-bs-toggle="modal" data-bs-target="#verpropiedad" style="background-image: url('$propiedad->galerias[0]->imagen');background-size:cover;">
                                    <div class="row">
                                        <div class="col-12 ">
        <h5 class="text-danger text-bold">                                        {{ $propiedad->tipo }} |  {{ $propiedad->operacion }} </h5>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12">
                                            <h3>{{ $propiedad->titulo }}</h3> 
                                       </div>
                                    </div>
                                    @if(isset($propiedad->galerias[0]->imagen))

                                    <div class="row my-3">
                                    <img src="{{$propiedad->galerias[0]->imagen}}" alt="">
                                    </div>
                                    @endif
                                    <div class="row">
                                    <div class="col-12">
                                       <p class="h5 "> {{ $propiedad->descripcion_detallada }}  </p>                                          

                                        </div>
                                        </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6 my-1 col-12 col-lg-10 text-center">
                                            <a href="https://api.whatsapp.com/send?phone=542625528571&text=hola%2C%20me%20interesa%20la%20propiedad%20{{ $propiedad->titulo }}" target="_blank" rel="noopener noreferrer" class="btn btn-danger w-100">CONTACTAR</a>
                                        </div>
                                        <div class="col-md-6 my-1 col-12 col-lg-10 text-center">
                                            <a target="blank"  class=" btn btn-danger w-100">VER MÁS </a>

                                        </div>
                                    </div>
                                </div>  
                            @endforeach
                        </div>
                        @endif    
     
            <div class="row h-50 mt-4" data-aos="fade-right" id="tasaciones">
                <div class="col-12">
                    <h1 class="my-2 text-danger">Tasaciones</h1>
                    <p class="text-dark d-block text-bold mb-3 h5 mt-2">Tasaciones Inmobiliarias Personales. </p>
                    <p class="text-dark d-block text-bold mb-3 h5 mt-2">Tasaciones Inmobiliarias Judiciales. </p>
                    <p class="text-dark d-block text-bold mb-3 h5 mt-2">Martillero Publico Matricula N° 3077</p>
                    <p class="text-dark d-block text-bold mb-3 h5 mt-2">Corredor Inmobiliario Matricula N° 1127</p>
                </div>
            </div>
             <div id="contacto" data-aos="fade-left" class="row h-50 mt-4">
            <div class="col-12">
            <h1 class="my-2 text-danger">Contacto</h1>

            <a href="https://elidatorresinmobiliaria@gmail.com" target="_blank" class="text-dark d-block  mb-3  h5">elidatorresinmobiliaria@gmail.com</a>
            
                <a href="https://wa.link/5n14er" target="_blank" class="text-dark d-block text-bold mb-3 h5">Escribinos via whatsapp</a> 
                <a href="tel:+5402625528571">+5402625528571</a>
            </div>
            <div class="row">
                <div class="col-12">
                    <h5 class="text-dark d-block text-bold  h5 mt-2">Nos ubicamos en Libertador Sur 312</h5>
                    <iframe class="my-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.9948719039944!2d-67.6916401252408!3d-34.981793177561705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9678173612cf0def%3A0x3b7489cf74cab066!2sELIDA%20TORRES%20INMOBILIARIA!5e0!3m2!1ses-419!2sar!4v1733863866086!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>
</div>
<footer class="row">
    <div class="col-12 text-end">
    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-primary">Escritorio</a>
                    @else
                        <a href="{{ route('login') }}" class="text-secondary text-small  ingresar  mt-5 text-end">ingresar</a>

                     
                    @endauth
            @endif
         
    </div>
</footer>

<!-- Modal -->
<div class="modal fade " id="verpropiedad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="contenedor-galeria ">
      <div id="vergaleria">                
      </div>
      </div>
            <h3 class="text-gray-700 my-3" id="operacion"></h3>          
            <h2 class="text-gray-800  py-2 px-1" id="titulo"></h2>
            <h6 class="text-white bg-danger py-2 px-1" id="habitaciones"></h6>
            <h6 class="text-white bg-danger py-2 px-1" id="banos"></h6>
            <h6 class="text-white bg-danger py-2 px-1" id="cocheras"></h6>            
            <h6 class="text-white bg-danger py-2 px-1" id="metraje"></h6>
            <h6 class="text-white bg-danger py-2 px-1" id="forma_de_pago"></h6>
            <h6 class="text-white bg-danger py-2 px-1" id="descripcion_detallada"></h6>

    </div>
   
    </div>
  </div>
</div>
    </div>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
        <style>
            .header{
                height: 60vh;
                background-image: url("http://127.0.0.1:8000/storage/inmobiliaria.jpeg");
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
                
            }
    section{
        display: flex;
        width: 80%;

    }
    section img{
        width: 100%;
        flex-grow: 1;
        opacity: .8;
        transition: .5s ease;
        object-fit: cover;
    }
    section img:hover{
        cursor: crosshair;
        width: 140%;
        opacity: 1;
        filter: contrast(100%);
    }

    
.contenedor-galeria {
    display: grid;
    place-items: center;
    width: 100%;
}

#vergaleria {
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
    max-width: 100%;
    width: 100%;
}
body{
    background: #e7d5d5;
}
.ingresar{
    color:  #e2d5d5 !important;
}
.contenedor-imagen {
    position: relative;
    left: 0;
    width: 100%;
    border-radius: 5px;
    height: auto;
    overflow: hidden;
    background-color: #efefef;
    transition: 0.4s ease-in-out;
    box-shadow: 0 5px 12px rgb(0, 0, 0, 0.5);
    flex: 0.25;
}

.contenedor-imagen img {
    height: 250px;
    width: 100%;
    object-fit: cover;
}

.contenedor-imagen:hover {
    flex: 2;
    cursor: pointer;
    height:  auto;
    border-radius: 5px;
width: auto;
}


.contenedor-imagen:active {
    flex: 2;
    cursor: pointer;
    height:  auto;
    border-radius: 5px;
width: 150vw;
}


  
    @keyframes reveal{
        from{
            opacity: 0;
            translate: 0 100px;
        }
        to {
            opacity: 1;
            translate: 0 0;
        }
        
    }
    .propiedad{
        animation: reveal both;
        animation-timeline: view();
        animation-range: entry 20% cover 30%;
        border-radius: 5px;
        border-bottom: 2px solid red ;
        padding: 3em 2px 3em 2px;
    }
    img{
        animation: reveal both;
        animation-timeline: view();
        animation-range: entry 20% cover 30%;
    }
    .nav-link , .nav-item{
        color: red;
    }
    .titulo{
        opacity: 0.9;
    }
</style>
<script>
    function verpropiedad (propiedad){
        let parametrop=JSON.parse(propiedad)
        document.getElementById("banos").innerText='BAÑOS '+parametrop.baños
        document.getElementById("titulo").innerText=''+parametrop.titulo
        document.getElementById("habitaciones").innerText='HABITACIONES:'+parametrop.habitaciones
        
        document.getElementById("operacion").innerText=''+parametrop.tipo+' | '+parametrop.operacion
        document.getElementById("forma_de_pago").innerText='FORMA DE PAGO '+parametrop.forma_de_pago
        document.getElementById("metraje").innerText='SUPERFICIE '+parametrop.metraje
        document.getElementById("cocheras").innerText='COCHERAS '+parametrop.cocheras   
        document.getElementById("descripcion_detallada").innerText='DESCRIPCION '+parametrop.descripcion_detallada
        const galeriaContainer = document.querySelector('#vergaleria');
        parametrop.galerias.forEach(element => { 
            const img = document.createElement('img');
            const figure=document.createElement("figure")
            const contenedor=document.createElement("div")

            contenedor.className='contenedor-imagen'
            img.src = element.imagen; // Asignar la ruta de la imagen
    img.alt = `Imagen ${element.id}`; // Agregar un atributo alt descriptivo
    figure.appendChild(img)
    contenedor.appendChild(figure)

    galeriaContainer.appendChild(contenedor);
        });
    }
</script>    
</body>

</html>

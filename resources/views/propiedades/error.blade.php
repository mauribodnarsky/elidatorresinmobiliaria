@extends('layouts.app')
<div class="row h-100">
  <div class="col-12 d-flex justify-content-center align-items-center">
    <h1 class="text-danger text-bold d-block">UPPS NO HAY COINCIDENCIAS CON TU BUSQUEDA</h1> <br>
    <p class="text-bold mt-4 d-block">Seras redigirido a la página principal</p>
  </div>
</div>


<script>
  setTimeout(function(){
    window.location.href="http://127.0.0.1:8000/"  
  },3000)
</script>
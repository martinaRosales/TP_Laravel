@extends('layout.layout')

@section('title', 'Timer')

@section('contenido')

<div class="row">
  <div class="timerContainer card col-sm-10 mx-auto m-4">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">
      <p class="card-text">
        With supporting text below as a natural lead-in to additional
        content.
      </p>
      <p id="timer"></p>
      <h5 class="card-title"></h5>
      <a id="btnIniciar" href="#" class="btn btn-primary">Iniciar</a>
      <a id="btnDetener" href="#" class="btn btn-danger">Detener</a>
      <div id="contador"></div>
    </div>
  </div>
</div>
<script src="js/timer2.js" type="module"></script>

@endsection
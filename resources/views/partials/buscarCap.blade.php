@extends('layouts.master')
@section('content')
<div class="container">
    <h1 style="text-align:center">{{$Capitulo->nombre}}</h1>
</div>
<div class="row">
    <div class="col-sm-12" style="text-align:center; margin-top:20px">
      <a href="{{ url('edit/2/' .$Capitulo->id)}}"  class="btn btn-outline-secondary" >Editar</a>
      <a href="/buscar"  class="btn btn-outline-secondary" >Volver al buscador</a>
    </div>
</div>
@stop

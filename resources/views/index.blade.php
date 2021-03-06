@extends('layouts.master')
@section('content')
<div id="accordion" style="margin-top:2rem">
  @foreach( $titulo as $tit)
  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
        <h3>{{$tit->nombre}}</h3> 
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="card-body">
          @foreach( $capitulo as $cap) 
          @if ($cap->id_titulo == $tit->id) 
              <h3 style="text-align:center">{{$cap->nombre}}</h3>   
              @foreach( $articulo as $art) 
                @if ($art->id_capitulo == $cap->id) 
                  <h5 style="text-align:center">{{$art->nombre}}</h5>
                  <p style="text-align:justify">{{$art->contenido}}</p>
                  <div style="text-align:center ">
                    @if ($art->img != null) 
                    
                    <div>
                        <img class="figure-img img-fluid rounded" width="150" height="150" alt="" src="{{asset($art->img)}}">
                    </div>
                    @endif
                    @if ($art->vid != null) 
                      <div>
                        <video class="figure-img img-fluid rounded" src="{{asset($art->vid)}}" width="150" height="150" controls></video>
                      </div>
                    @endif
                  </div>
                @endif 
              @endforeach 
          @endif                
          @endforeach     
      </div>
    </div>
  </div>
  @endforeach
</div>
@stop
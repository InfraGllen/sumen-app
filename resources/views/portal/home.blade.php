@php
    $heightHeader = 300
@endphp

@section('stylesheets')
<link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
@endsection

@section('headscripts')
<script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
@endsection

@extends('layouts.app')

@section('content')
<div class="container push-to-header" style="margin-top: -250px">
  <div class="row justify-content-between mb-3 mb-md-4 flex-column-reverse flex-md-row">
    <div class="col-md-5 text-center text-md-left mb-3 mb-md-0">
      <h5 class="text-white">En esta plataforma  podés participar y ver el avance de los proyectos en tu ciudad! </h5>
      <a href="#" class="btn btn-success mt-2">Conocer más <i class="fas fa-arrow-right ml-2"></i></a>
    </div>
    <div class="col-md-5 align-self-center">
    <h5 class="text-white">Selecciona la ciudad que querés monitorear</h5>
    <div class="row">
            <div class="col mb-4 text-center">
        
            <div class="dropdown">
                
            <button class="btn btn-lg btn-icon text-white is-size-4 is-700" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mendoza Provincia<i class="fas fa-chevron-down ml-3"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Godoy Cruz</a>
              <a class="dropdown-item" href="#">Maipú</a>
            </div>
          </div>
            </div>
           
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-md-5 col-lg-4 mb-2 mb-md-0">
      <div class="card rounded shadow-sm">
        <div class="card-body text-center">
        {{-- <p><b>Resumen</b></p> --}}
          <p class="mb-4"><span class="h2  "><i class="fas fa-bullseye fa-xs text-info"></i>&nbsp{{$countObjectives}}</span><br>Metas publicadas</p>
          <div class="row">
            <div class="col">
              <p><span class="h3 "><i class="fas fa-medal fa-xs text-primary"></i>&nbsp;{{$countGoals}}</span><br>Proyectos publicados</p>
            </div>
            <div class="col">
              <p><span class="h3 "><i class="fas fa-check fa-xs text-success"></i>&nbsp{{$countGoalsCompleted}}</span><br>Proy. completados</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7 col-lg-8">
      <div class="card rounded shadow-sm">
        <div class="card-body">
        {{-- <p><b>Estado de las metas</b></p> --}}
          <portal-home-stats fetch-url="{{route('apiService.home.stats')}}">
            @include('partials.loading')
          </portal-home-stats>
        </div>
      </div>
    </div>
  </div>
  <h4 class="is-400 mb-3">Ultimos reportes publicados</h4>
  <portal-home-reports-carrousel fetch-url="{{route('apiService.reports',['order_by'=>'updated_at,DESC'])}}"></portal-home-reports-carrousel>
  <p class="mb-4 text-right"><a href="{{route('reports')}}" class="btn btn-outline-primary">Ver mas reportes <i class="fas fa-arrow-right"></i></a></p>
  <h4 class="is-400 mb-3">Ultimas metas actualizadas</h4> 
  <portal-last-objectives fetch-url="{{route('apiService.objectives',['order_by'=>'updated_at,DESC','with'=>'objective_latest_goals,objective_latest_reports,objective_stats,','size' => 5])}}"></portal-last-objectives>
  <p class="mb-4 text-right"><a href="{{route('objectives')}}" class="btn btn-outline-primary">Ver mas metas <i class="fas fa-arrow-right"></i></a></p>
  <h4 class="is-400 mb-3">Mapa de proyectos</h4>
  <map-reports fetch-url="{{route('apiService.reports',['mappable' => true, 'size'=> 15])}}" access-token="{{config('services.mapbox.key')}}" :paginated="false" map-style="{{config('services.mapbox.style')}}">

</div>
@endsection
@extends('master')
@section('content')
<div class="container custom_product">
    <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
  
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      @foreach ($products as $item)
      <div class="carousel-item {{$item['id']==1?'active':''}}">
        <img src={{$item['gallery']}} alt="Los Angeles" class="d-block slider_img">
        <div class="carousel-caption">
          <h3>{{$item['name']}}</h3>
          <p>{{$item['description']}}</p>
        </div>
      </div>
      @endforeach
    </div>
  
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon "></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
    
</div>
@endsection

@extends('layouts.default')
@section('content')

<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="S.jpg" class="d-block w-100 carousel-image" alt="Model S">
        <div class="carousel-caption d-none d-md-block">
          <h5>Model S</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://cdn.motor1.com/images/mgl/3WAprx/s3/tesla-model-3.webp" class="d-block w-100 carousel-image" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Model 3</h5>
        
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://digitalassets.tesla.com/tesla-contents/image/upload/h_1800,w_2880,c_fit,f_auto,q_auto:best/Model-X-Main-Hero-Desktop-LHD" class="d-block w-100 carousel-image" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Model X</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://digitalassets.tesla.com/tesla-contents/image/upload/h_1800,w_2880,c_fit,f_auto,q_auto:best/Model-Y-Main-Hero-Desktop-Global" class="d-block w-100 carousel-image" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Model Y</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

@stop
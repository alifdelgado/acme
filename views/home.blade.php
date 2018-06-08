@extends('base')
@section('browsertitle')
Home
@stop
@section('content')
<div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/slider/1.jpg" alt="First slide" height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nature Tours Around the World</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/slider/2.jpg" alt="Second slide" height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Experience Nature as Never Before</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/slider/3.jpg" alt="Third slide" height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Register Now</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
  <div class="card-deck">
    <div class="card">
      <div class="card-header text-center">
        <h3>About</h3>
        <i class="fas fa-globe fa-2x"></i>
      </div>
      <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
    <div class="card">
      <div class="card-header text-center">
        <h3>Tours</h3>
        <i class="fas fa-eye fa-2x"></i>
      </div>
      <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
    <div class="card">
      <div class="card-header text-center">
        <h3>Contact</h3>
        <i class="fas fa-phone fa-2x"></i>
      </div>
      <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>
</div>
@stop

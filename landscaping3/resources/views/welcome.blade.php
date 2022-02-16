@extends('layouts.app')

@section('content')   

<!--Bootstrap Carousel-->
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="100">
                <img src="{{ URL::to('/img/Fence1.jpg') }}" class="d-block w-100" alt="..."><!--Image File   https://pixabay.com/get/53e0d74b4255aa14f1dc8460da2932761c3fd7e1515870_640.jpg?attachment=-->
                <div class="carousel-caption d-none d-md-block">		
                
                </div>
          </div>
          
          <div class="carousel-item" data-interval="200">
            <img src="{{ URL::to('/img/lawn.jpg') }}" class="d-block w-100" alt="..."><!--Image File    https://pixabay.com/get/55e8d146425bb108f5d08460da2932761c3fd7e2525875_1280.jpg?attachment=-->
          </div>

          <div class="carousel-item">
            <img src="{{ URL::to('/img/path.jpg') }}" class="d-block w-100" alt="..."><!--Image File    https://pixabay.com/get/57e9d24a4c53a514f6da8c7dda35367b1d36deec54537041_1280.jpg?attachment=-->
          </div>

        </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
    <br><br><br><br><br>

<!--Bootstrap Card View-->
    <div class="card-group">
        <div class="card jumbotron">
          <div class="card-body">
            <h1 align="center">Landscaping</h1>
          </div>
        </div>

        <div class="card jumbotron">
          <div class="card-body">
            <h1 align="center">Fencing</h1>
          </div>
        </div>

        <div class="card jumbotron">
          <div class="card-body">
            <h1 align="center">Lawns & Garden</h1>
          </div>
        </div>
      </div>


      <br><br><br><br><br>



@endsection

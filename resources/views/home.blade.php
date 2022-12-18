@extends('front-end.main')
@section('content')
<section class="section">

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Caption</h4>
            </div>
            <div class="card-body">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1" class=""></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item carousel-item-next carousel-item-left">
                    <img class="d-block w-100" src="assets/img/news/img01.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Heading</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/news/img07.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Heading</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="carousel-item active carousel-item-left">
                    <img class="d-block w-100" src="assets/img/news/img08.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Heading</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <h4>Example Card</h4>
            </div>
            <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="card-footer bg-whitesmoke">
            This is card footer
            </div>
        </div>
    </div>
  </section>

@endsection

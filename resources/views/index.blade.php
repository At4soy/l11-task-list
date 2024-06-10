@extends('layouts.app')

@section('styles')
<style>
  body {
    height: 100%;
    width: 100%;
    background-color: #dde7e7;
    overflow-x: hidden;
  }

  @media (max-width: 991px) {
    .sidebar {
      background-color: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
    }
  }

  .content {
    margin: 100px 0px 100px 0px;
  }

  .linkCounter {
    margin: 50px 0px 0px 500px;
    display: flex;
    justify-content: center;
    align-items: center;

  }

  .linkCounter p {
    margin: 0px 20px 0px 0px;
  }

  .box {
    width: 400px;
    height: 30px;
    border-radius: 30px;
    padding: 20px;
  }

  .box>i {
    font-size: 20px;
    color: #777;
  }

  .box>input {
    flex: 1;
    height: 40px;
    border: none;
    outline: none;
    font-size: 18px;
    padding-left: 10px;
  }

  #noTaskText{
    display: flex;
    justify-content: center;
    font-size: 40px
  }

  #ctg-text {
    text-align: center;
  }

  .section_our_solution{
    align-items: center;
  }

  .section_our_solution .row {
    align-items: center;
  }

  .our_solution_category {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
  }

  .our_solution_category .solution_cards_box {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .solution_cards_box .solution_card {
    flex: 0 50%;
    background: #fff;
    box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
      0 5px 15px 0 rgba(37, 44, 97, 0.15);
    border-radius: 15px;
    margin: 8px;
    padding: 10px 15px;
    position: relative;
    z-index: 1;
    overflow: hidden;
    min-height: 165px;
    min-width: 600px;
    transition: 0.7s;
  }

  .solution_cards_box .solution_card:hover {
    background: #309df0;
    color: #fff;
    transform: scale(1.1);
    z-index: 9;
  }

  .solution_cards_box .solution_card:hover::before {
    background: rgb(85 108 214 / 10%);
  }

  .solution_cards_box .solution_card:hover .solu_title h3,
  .solution_cards_box .solution_card:hover .solu_description p {
    color: #fff;
  }

  .solution_cards_box .solution_card:before {
    content: "";
    position: absolute;
    background: rgb(85 108 214 / 5%);
    width: 170px;
    height: 400px;
    z-index: -1;
    transform: rotate(42deg);
    right: -56px;
    top: -23px;
    border-radius: 35px;
  }

  .solution_cards_box .solution_card:hover .solu_description button {
    background: #fff !important;
    color: #309df0;
  }


  .solution_card .solu_title h3 {
    color: #212121;
    font-size: 1.3rem;
    margin-top: 13px;
    margin-bottom: 13px;
  }

  .solution_card .solu_description p {
    font-size: 15px;
    margin-bottom: 15px;
  }

  .solution_card .solu_description button {
    border: 0;
    border-radius: 15px;
    background: linear-gradient(140deg,
        #42c3ca 0%,
        #42c3ca 50%,
        #42c3cac7 75%) !important;
    color: #fff;
    font-weight: 500;
    font-size: 1rem;
    padding: 5px 16px;
  }

  .our_solution_content h1 {
    text-transform: capitalize;
    margin-bottom: 1rem;
    font-size: 2.5rem;
  }

  /*start media query*/
  @media screen and (min-width: 320px) {
    .sol_card_top_3 {
      position: relative;
      top: 0;
    }

    .our_solution_category {
      width: 80%;
      margin: 0 auto;
    }

    .our_solution_category .solution_cards_box {
      flex: auto;
    }
  }

  @media only screen and (min-width: 768px) {
    .our_solution_category .solution_cards_box {
      flex: 1;
    }
  }

  @media only screen and (min-width: 1024px) {
    .sol_card_top_3 {
      position: relative;
      top: -3rem;
    }

    .our_solution_category {
      width: 50%;
      margin: 0 auto;
    }
  }

  .nav-link .bi {
  display: inline-block;
  vertical-align: middle;
}

</style>
@endsection

@section('navbar')
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand fs-4" href=""><img src="{{ asset('storage/images/logo.png') }}" width="75px"></a>
    <!-- Toggle Btn -->
    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- SideBar -->
    <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <!-- SideBar Header -->
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Trendseii</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <!-- SideBar Body -->
      <div class="offcanvas-body d-flex flex-column flex-lg-row p-4">
        <ul class="navbar-nav justify-content-end align-items-center fs-5 flex-grow-1 pe-3">
          <!-- SearchBar -->
          <div class="box d-flex justify-content-center align-items-center bg-white">
            <input type="text" name="">
            <a href="" class="link-secondary"><i class="bi bi-search"></i></a>
          </div>
        </ul>
        <ul class="navbar-nav justify-content-end align-items-center fs-5 flex-grow-1 pe-3">
          <!-- Buttons -->
          <div class="d-flex">
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person flex-items-center" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                </svg>
                Account
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Account Details</a></li>
                <li><a class="dropdown-item" href="{{ route('tasks.create') }}">Admin Panel</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <!-- Login / Sign up -->
                  <div class="d-flex justify-content-center align-items-center gap-3">
                    <a href="" class="text-black">Login</a>
                    <a href="" class="text-white text-decoration-none px-3 py-1 bg-primary rounded-4">Sign Up</a>
                  </div>
                </li>
              </ul>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </div>
</nav>

@endsection



<!-- Categories -->
@section('categories')
<div class="container mt-4">
  <div class="row d-flex justify-content-center">
    <div class="col-md-1">
      <a href="#" class="mb-3 d-flex justify-content-center">
        <img src="storage/images/ctg-1.jpg" width="65px" class="img-fluid rounded-circle">
      </a>
      <p class="mt-2" id="ctg-text">Popular</p>
    </div>
    <div class="col-md-1">
      <a href="#" class="mb-3 d-flex justify-content-center">
        <img src="storage/images/ctg-2.jpg" width="65px" class="img-fluid rounded-circle">
      </a>
      <p class="mt-1" id="ctg-text">Campaign</p>
    </div>
    <div class="col-md-1">
      <a href="#" class="mb-3 d-flex justify-content-center">
        <img src="storage/images/ctg-3.jpg" width="65px" class="img-fluid rounded-circle">
      </a>
      <p class="mt-1" id="ctg-text">Sony</p>
    </div>
    <div class="col-md-1">
      <a href="#" class="mb-3 d-flex justify-content-center">
        <img src="storage/images/ctg-4.jpg" width="65px" class="img-fluid rounded-circle">
      </a>
      <p class="mt-1" id="ctg-text">Iphone</p>
    </div>
    <div class="col-md-1">
      <a href="#" class="mb-3 d-flex justify-content-center">
        <img src="storage/images/ctg-5.jpg" width="65px" class="img-fluid rounded-circle">
      </a>
      <p class="mt-1" id="ctg-text">Samsung</p>
    </div>
    <div class="col-md-1">
      <a href="#" class="mb-3 d-flex justify-content-center">
        <img src="storage/images/ctg-6.jpg" width="65px" class="img-fluid rounded-circle">
      </a>
      <p class="mt-1" id="ctg-text">Philips</p>
    </div>
  </div>
</div>
@endsection

@section('content')
    <div class="content">
      @forelse ($tasks as $task)
      <div class="section_our_solution">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="our_solution_category">
              <div class="solution_cards_box">
                <div class="solution_card">
                  <div class="solu_title">
                    <h3>{{$task->title}} - ${{$task->price}}</h3>
                  </div>
                  <div class="solu_description">
                    <p>
                      {{$task->description}}
                    </p>
                    <a class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" href="{{ route('tasks.show', ['task' => $task->id]) }}">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @empty
        <div id="noTaskText"><h1>There are no tasks!</h1></div>
      @endforelse
      <div class="linkCounter">
        @if ($tasks->count())
        <h5>{{$tasks->links()}}</h5>
        @endif
      </div>
      </div>
    </div>
@endsection


@section('content_carousel')

<div class="container mt-5">
  <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner rounded">
      <div class="carousel-item active">
        <img src="storage/images/ctg-tech.png" class="d-block" width="100%" alt="...">
      </div>
      <div class="carousel-item">
        <img src="storage/images/ctg-outfit.png" class="d-block" width="100%" alt="...">
      </div>
      <div class="carousel-item">
        <img src="storage/images/ctg-sport.png" class="d-block" width="100%" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

@endsection
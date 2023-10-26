@extends('layouts.navbar')

@section('navnav')

   
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<div id="carouselExample" class="carousel slide">
<div class="carousel-inner">
  <div class="carousel-item active">
    <img  src="https://assets.videomaker.com/2023/10/7yzo6g-661x440.jpg"  class="tales" alt="...">
  </div>
  <div class="carousel-item">
    <img src="https://static0.gamerantimages.com/wordpress/wp-content/uploads/2020/07/Copy-of-Copy-of-Copy-of-Creatives-29.jpg" class="tales"alt="...">
  </div>
  <div class="carousel-item">
    <img src="https://preview.redd.it/meme-face-but-valorant-agents-v0-dq7v5kx533z91.png?width=4093&format=png&auto=webp&s=41afafec2966a930428c26cf67a9ca5feb4a4c8b" class="tales" alt="...">
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>

<!-- Remove the container if you want to extend the Footer to full width. -->
<div class=" mt-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #45526e"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">MDBootstrap</a>
            </p>
            <p>
              <a class="text-white">MDWordPress</a>
            </p>
            <p>
              <a class="text-white">BrandFlow</a>
            </p>
            <p>
              <a class="text-white">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Useful links
            </h6>
            <p>
              <a class="text-white">Your Account</a>
            </p>
            <p>
              <a class="text-white">Become an Affiliate</a>
            </p>
            <p>
              <a class="text-white">Shipping Rates</a>
            </p>
            <p>
              <a class="text-white">Help</a>
            </p>
          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2020 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/"
                >MDBootstrap.com</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              class="text-white"
              role="button"
              ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              class="text-white"
              role="button"
              ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              class="text-white"
              role="button"
              ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
              class="btn btn-outline-light btn-floating m-1"
              class="text-white"
              role="button"
              ><i class="fab fa-instagram"></i
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->

@endsection
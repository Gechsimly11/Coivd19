@extends('layouts.app')

@section('content')



<main id="main">
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
  @endif

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Reported Cases and Deaths and Active and Recover</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Report</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->


    



    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-asea">Asea</li>
              <li data-filter=".filter-america">America</li>
              <li data-filter=".filter-europe">Europe</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

          <div class="col-lg-4 col-md-6 filter-america">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="#country">USA</a></h3>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-asea">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="#country" >China</a></h3>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-europe">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="#country">Africa</a></h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-europe">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="#country">Austrlia</a></h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-asea">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="#country">Cambodia</a></h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-asea">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="#country">Philipin</a></h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-asea">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="#country">Japan</a></h3>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-europe">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="#country">France</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 filter-america">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="#country">Canada</a></h3>
              </div>
            </div>
          </div>

        

    
      <table class="table table-bordered table-dark">
        <tr>
            {{-- <th>#</th> --}}
            <th>Country</th>
            <th>Total Case</th>
            <th>Total Deadth</th>
            <th>Recover</th>
            <th>Total Active</th>
            <th>New Case</th>
            
        </tr>
        
        @foreach ($covids as $covid19)
        <tr>
            {{-- <td>{{ $covid19->id  }}</td> --}}
            <td>{{ $covid19->country }}</td>
            <td>{{ $covid19->case }}</td>
            <td>{{ $covid19->deadth }}</td>
            <td>{{ $covid19->recover }}</td>
            <td>{{ $covid19->active }}</td>
            <td>{{ $covid19->new }}</td>
        </tr>
        
        @endforeach
    </table>

        

      </div>
    </section><!-- End Portfolio Section -->



  

  </main><!-- End #main -->
@endsection
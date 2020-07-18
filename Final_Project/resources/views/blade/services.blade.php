@extends('layouts.app')

@section('content')
<main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Information</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Information</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Section ======= -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/video.jpg" class="img-fluid" alt="">
            <a href="https://youtu.be/U8r3oTVMtQ0" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">CORONAVIRUS</a></h4>
              <p class="description">The COVID-19 pandemic has caused unprecedented public health and economic crises. In the coming weeks and months, viral tests for the presence of COVID-19.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">PROTECTION</a></h4>
              <p class="description">Governments, businesses, and families will rely on data from these tests as they make decisions around the path forward.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/download.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Understanding the Covid-19 Pandemic</a></h5>
                <p class="card-text">Johns Hopkins University is hosting a free, Publicly available course entitled Understanding the covid-19 Pandemic: Insignts from Johns Hopkins University Experts
                </p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img"> 
                <img src="assets/img/protection.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Frequently Asked Questions</a></h5>
                <p class="card-text">How do I self-quarantine? How long can COVID-19 live on surfaces? What will it take to develop a vaccine? Johns Hopkins experts answer your most frequently asked questions about coronavirus.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/hm.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Protecting Your Health</a></h5>
                <p class="card-text">Johns Hopkins expers offer best practices for protecting your health, the health of others, and preventing the spread of coronavirus.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/mehh.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Public Health on Call</a></h5>
                <p class="card-text">Experts from the jonhs Hopkins Bloomberg School of Public Health answer questions and discuss the latest developments in the COVID-19 public health crisis. New episodes are posted daily.</p>
                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Service Details Section -->

  
   

  </main><!-- End #main -->
@endsection
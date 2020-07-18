@extends('layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Covid-<span>19</span></h2>
          <p class="animate__animated animate__fadeInUp">Three words offer the best advice: Wash. Your. Hands. Wash them for at least 20 seconds each time. Wash them before you prepare food, eat, after use the bathroom, if you cough or sneeze, and if you are caring for sick people. If you don't have soap and water, use a sanitizer with at least 60% alcohol. </p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Treatments</h2>
          <p class="animate__animated animate__fadeInUp">Vaccines and treatment options for COVID-19 are currently being investigated around the world. There’s some evidence that certain medications may have the potential to be effective with regard to preventing illness or treating the symptoms of COVID-19.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Get the Facts About Coronavirus</h2>
          <p class="animate__animated animate__fadeInUp">As much as possible, stay in a specific room and away from other people and pets in your home. If possible, you should use a separate bathroom. If you need to be around other people or animals in or outside of the home, wear a cloth face covering.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Symptoms of COVID-19</a></h4>
              <p class="description">People with COVID-19 have had a wide range of symptoms reported – ranging from mild symptoms to severe illness. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Self-check symptoms</a></h4>
              <p class="description">The purpose of the Coronavirus Self-Checker is to help you make decisions about seeking appropriate medical care. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">People at increased risk</a></h4>
              <p class="description">There are also other factors that can increase your risk for severe illness, such as having underlying medical conditions. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Should you get tested?</a></h4>
              <p class="description">To learn if you have a current infection, viral tests are used. Most people have mild illness and can recover at home without medical care. ​​</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/map.jpg" class="img-fluid" alt="">
            <a href="https://youtu.be/5DGwOJXSxqg" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
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

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>News</h2>
          <p>Coronaviruses are a type of virus. There are many different kinds, and some cause disease. A newly identified coronavirus, SARS-CoV-2, has caused a worldwide pandemic of respiratory illness, called COVID-19.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>COVID-19 MAP</h3>
            <p class="font-italic">
              COVID-19 appeared in Wuhan, a city in China, in December 2019. Although health officials are still tracing the exact source of this new coronavirus, early hypotheses thought it may be linked to a seafood market in Wuhan, China. Some people who visited the market developed viral pneumonia caused by the new coronavirus. A study that came out on Jan. 25, 2020, 
            </p>
            <ul>
              <li><i class="icofont-check"></i> 124,992 confirmed Los Angeles</li>
              <li><i class="icofont-check"></i> 19,037 confirmed Hudson</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>How did this new coronavirus spread to humans?</h3>
            <p class="font-italic">
              COVID-19 appeared in Wuhan, a city in China, in December 2019. Although health officials are still tracing the exact source of this new coronavirus, early hypotheses thought it may be linked to a seafood market in Wuhan, China.
            </p>
            <p>
              There is no coronavirus vaccine yet. Prevention involves frequent hand-washing, coughing into the bend of your elbow, staying home when you are sick and wearing a cloth face covering if you can't practice physical distancing.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/symptoms.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>What are symptoms of COVID-19?</h3>
            <p>The coronavirus COVID-19 is affecting 213 countries and territories around the world and 2 international conveyances: the Diamond Princess cruise ship harbored in Yokohama, Japan, and the Holland America's MS Zaandam cruise ship. </p>
            <ul>
              <li><i class="icofont-check"></i> Cough</li>
              <li><i class="icofont-check"></i> Fever or chills</li>
              <li><i class="icofont-check"></i> Shortness of breath or difficulty breathing</li>
              <li><i class="icofont-check"></i> Muscle or body aches</li>
            
            </ul>
          </div>
        </div>

       

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->
@endsection

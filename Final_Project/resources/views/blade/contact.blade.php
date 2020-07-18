@extends('layouts.app')

@section('content')


  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="container-fluid p-0 col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.573419426876!2d104.89579291371997!3d11.582407946968752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517bf7757d23%3A0x965c34888684bf1!2sParagon%20International%20University!5e0!3m2!1sen!2skh!4v1594353269665!5m2!1sen!2skh" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>

        </div>

      </div>
        </section><!-- End Contact Section -->

          {{-- <div class="col-lg-6">
              @foreach ($messages as $message1)
                
                <h2 class="entry-title">
                  {{$message1->name}}
                </h2>
  
                <div class="entry-meta">
                  {{$message1->rate}}
                </div>
  
                <div class="entry-content">
                  <p>
                    {{$message1->message}}
                  </p>
                </div>
              @endforeach
          </div> --}}
          {{-- <div class="col-lg-6">
            <article class="entry">
            @foreach ($messages as $message1)
              <div class="entry-title">
                <h2>
                  {{$message1->name}}
                </h2>
              </div>
              <div class="entry-meta">
                {{$message1->rate}}
              </div>
              <div class="entry-content">
                <p>
                  {{$message1->message}}
                </p>
              </div>
            
              @endforeach
            </article>
          </div> --}}
        
        <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
          @foreach ($messages as $message1)
                <article class="entry">
                  
                  <h2 class="entry-title">
                    {{$message1->name}}
                  </h2>
    
                  <div class="entry-meta">
                    {{$message1->rate}}
                  </div>
    
                  <div class="entry-content">
                    <p>
                      {{$message1->message}}
                    </p>
                    
                  </div>
                  
                </article>   
                @endforeach
    
          </div><!-- End .container -->
    
        </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection
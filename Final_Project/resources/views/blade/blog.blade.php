@extends('layouts.app')

@section('content')
  
  <main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="/">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
          <div >

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog-post-1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">How to Read Covid-19 Research (and Actually Understand It)</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">SARA HARRISON</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-07-11">July 11, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12
                      Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  EVALUATING THE QUALITY of Covid-19 research is challenging, even for the scientists who study it. Studies are rapidly pouring out of labs and hospitals, but not all of that information is rigorously vetted before it makes its way into the world. Some studies are small and anecdotal. Others are based on bad data or misplaced assumptions. Many are released as preprints without peer review. Others are hyped up with big press releases that overstate the results—but when scientists are finally able to dive into the research, sometimes the study isn’t as groundbreaking as it seemed.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog-post-2.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Are outdoor fitness classes safe now?</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Kerry Breen</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-07-08">July 8, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12
                      Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  As the coronavirus pandemic continues to disrupt daily life around the world, many are trying new ways to stay in shape. Some states have not yet reopened gyms; in some areas, newly reopened gyms have led to hundreds of people potentially being exposed to the coronavirus. Group fitness classes in particular are under scrutiny, and those that have begun often require intense precautions.

One potential solution: relocating those group fitness classes outdoors, suggest infectious disease experts.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog-post-3.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">We Have to Focus on Opening Schools, Not Bars</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Jennifer B. Nuzzo and Joshua M. Sharfstein</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-07-09">July 9, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12
                      Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  The way states lifted social distancing restrictions imposed to fight the coronavirus sadly demonstrates our priorities. Officials let bars, restaurants and gyms open, despite warnings from public health experts that these environments pose the greatest risk for spreading the disease.

Yet political leaders seem to have paid scant attention to safely reopening schools.

The consequences of those backward priorities — Covid-19 rampaging through states that reopened quickly — make it even more vital that we extensively prepare to reopen classrooms as safely as possible this fall.</p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/blog-post-4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Covid-19 cases are rising, but deaths are falling. What’s going on?</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John
                      Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-07-06">July 6, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12
                      Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  There is something confounding about the US’s new coronavirus spikes: Cases are rising, but the country is seeing its lowest death counts since the pandemic first exploded.

The numbers are genuinely strange to the naked eye: On July 3, the US reported 56,567 new Covid-19 cases, a record high. On the same day, 589 new deaths were reported, continuing a long and gradual decline. We haven’t seen numbers that low since the end of March.

When laypeople observe those contradictory trends, they might naturally have a follow-up question: If deaths are not increasing along with cases, then why can’t we keep reopening? The lockdowns took an extraordinary toll of their own, after all, in money and mental health and some lives. If we could reopen the economy without the loss of life we saw in April and May, then why shouldn’t we?
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

        

      </div><!-- End .container -->

    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection
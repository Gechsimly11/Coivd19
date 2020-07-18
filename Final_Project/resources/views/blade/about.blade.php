@extends('layouts.app')

@section('content')
  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Live Cases</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Live Cases</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
    <div id="regions_div" style="width: 600px; height: 300px;"></div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Cumulative Confirmed Cases</h3>
            <p class="font-italic">
              This map shows COVID-19 cases and deaths reported by U.S. states, the District of Columbia, New York City, and other U.S.-affiliated jurisdictions. Hover over the map to see the number of cases and deaths reported in each jurisdiction. 
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> 124,992 confirmed Los Angeles</li>
              <li><i class="icofont-check-circled"></i> 73,165 confirmed Maricopa</li>
              <li><i class="icofont-check-circled"></i> 19,037 confirmed Hudson</li>
              <li><i class="icofont-check-circled"></i> 16,666 confirmed Hillsborough</li>
            </ul>
            <p>
              Data is updated once per day to allow the system to pull county-level data. For the most up-to-date confirmed cases and deaths, please see the COVID-19 Global Map. New York City borough deaths data does not include Probable COVID-19 deaths, as this data is not reported.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">12,309,722</span>
            <p>TOTAL CASES</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">554,870</span>
            <p>TOTAL DEATHS</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">7,155,044</span>
            <p>RECOVERED</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">4,599,808</span>
            <p>ACTIVE CASES</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Skills Section ======= -->
    <section class="skills" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Charts</h2>
          <p>Coronavirus Disease 2019 (COVID-19) was detected in Wuhan, Hubei Province, China in December 2019. It was a new infectious disease and was caused by new type of virus SARS-CoV-2. COVID-19 is a cause of an outbreak of respiratory disease. </p>
        </div>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar b  g-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Total Cases <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Total Recovered <i class="val">70%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Active Cases <i class="val">40%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Total Deaths <i class="val">35%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section -->

    

  </main><!-- End #main -->
@endsection

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Aug 2023 11:42:20 GMT -->
<head>
  <meta charset="utf-8">
  <title>Superio | Just another HTML Template | Dashboard</title>

  <!-- Stylesheets -->
  <link href="{{ URL::to('/') }}/assets/css/bootstrap.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/css/style.css" rel="stylesheet">
  <link href="{{ URL::to('/') }}/assets/css/responsive.css" rel="stylesheet">

  <link rel="shortcut icon" href="{{ URL::to('/') }}/
{{ URL::to('/') }}/
{{ URL::to('/') }}/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="{{ URL::to('/') }}/
{{ URL::to('/') }}/
{{ URL::to('/') }}/images/favicon.png" type="image/x-icon">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

  <div class="page-wrapper dashboard ">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

	  
	  
  @include('Employer/layouts.header')
  @include('Employer/layouts.sidebar')


  @yield('content')

  @include('Employer/layouts.footer')

   

  <script src="{{ URL::to('/') }}/assets/js/jquery.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/popper.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/chosen.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/bootstrap.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/jquery-ui.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/jquery.fancybox.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/jquery.modal.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/mmenu.polyfills.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/mmenu.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/appear.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/ScrollMagic.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/rellax.min.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/owl.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/wow.js"></script>
  <script src="{{ URL::to('/') }}/assets/js/script.js"></script>

  <!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
  <script src="js/chart.min.js"></script>
  <script>
    Chart.defaults.global.defaultFontFamily = "Sofia Pro";
    Chart.defaults.global.defaultFontColor = '#888';
    Chart.defaults.global.defaultFontSize = '14';

    var ctx = document.getElementById('chart').getContext('2d');

    var chart = new Chart(ctx, {

      type: 'line',
      // The data for our dataset
      data: {
        labels: ["January", "February", "March", "April", "May", "June"],
        // Information about the dataset
        datasets: [{
          label: "Views",
          backgroundColor: 'transparent',
          borderColor: '#1967D2',
          borderWidth: "1",
          data: [196, 132, 215, 362, 210, 252],
          pointRadius: 3,
          pointHoverRadius: 3,
          pointHitRadius: 10,
          pointBackgroundColor: "#1967D2",
          pointHoverBackgroundColor: "#1967D2",
          pointBorderWidth: "2",
        }]
      },

      // Configuration options
      options: {

        layout: {
          padding: 10,
        },

        legend: {
          display: false
        },
        title: {
          display: false
        },

        scales: {
          yAxes: [{
            scaleLabel: {
              display: false
            },
            gridLines: {
              borderDash: [6, 10],
              color: "#d8d8d8",
              lineWidth: 1,
            },
          }],
          xAxes: [{
            scaleLabel: {
              display: false
            },
            gridLines: {
              display: false
            },
          }],
        },

        tooltips: {
          backgroundColor: '#333',
          titleFontSize: 13,
          titleFontColor: '#fff',
          bodyFontColor: '#fff',
          bodyFontSize: 13,
          displayColors: false,
          xPadding: 10,
          yPadding: 10,
          intersect: false
        }
      },
    });
  </script>

</body>


<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Aug 2023 11:42:22 GMT -->
</html>
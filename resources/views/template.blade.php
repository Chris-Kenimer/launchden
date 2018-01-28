<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ setting('site.description')}}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ URL::asset('css/material-dashboard.css?v=1.2.0') }}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ URL::asset('css/demo.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style media="screen">
      .ico-details-card .form-group {
        margin-top: 0px;
      }
      .form-group {
        padding-bottom: 5px !important; 
        margin: 5px 0 0 0 !important;
      }
    </style>
</head>

<body>
    <div class="wrapper">
  @include('partials.main-sidebar')
        <div class="main-panel">
          @include('partials.navigation')
            <div class="content">
                <div class="container-fluid">




                      @yield('content')

                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/material.min.js') }}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{ URL::asset('js/chartist.min.js') }}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{ URL::asset('js/arrive.min.js') }}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{ URL::asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ URL::asset('js/bootstrap-notify.js') }}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ URL::asset('js/material-dashboard.js?v=1.2.0') }}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ URL::asset('js/demo.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>

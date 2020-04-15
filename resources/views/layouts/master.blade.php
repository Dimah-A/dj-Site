<!DOCTYPE html>
<html lang="en">

<head>
  <title>DJ Kranks | Official Website</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <!-- boostrap -->

  <link rel="stylesheet" href="assets/animate.css">
  <link rel="stylesheet" href="assets/style.css">

  {{-- css --}}
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

</head>
<body>




    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>


    <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
    <!-- boostrap -->
    <script src="assets/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/scripts/plugins.js" type="text/javascript"></script>
    <script src="assets/scripts/script.js" type="text/javascript"></script>
  
  </body>
  
  </html>
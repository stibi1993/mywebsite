<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My website</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/social.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/stars.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    @include('inc.stars')
    @include('inc.navbar')
    <div class="container">
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
          @include('inc.messages')
          @yield('content')
        </div>

        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
<footer>
  <a href="https://www.facebook.com/tibi.seres.3"><i class="fa fa-facebook"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com/in/tibor-seres-824294b0/"><i class="fa fa-linkedin"></i></a>
</footer>


  </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                @foreach ($actualites as $actualite)
                <div class="form-group">
                <div class="panel-heading">
                    <div class="panel-body">
                    <li>{{$actualite->titre}}</li>
                    <li>{{$actualite->ciontenu}}</li>
                    <li> <img src="{{asset('storage/' . $actualite->photo)}}" alt="" width="100px" height="100px">
                    </li>
                </div>
                </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </body>
</html>

<link href="{{asset('tes/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('tes/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('tes/lib/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('tes/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('tes/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('tes/css/bootstrap.min.css')}}" rel="stylesheet">

  @foreach ($actualites as $actualite)
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
            <img src="{{asset('storage/' . $actualite->photo)}}" alt=""  class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">{{$actualite->titre}}</a></h3>
                <p>{{$actualite->contenu}}</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
         @endforeach

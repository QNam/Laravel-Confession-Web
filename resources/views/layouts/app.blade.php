<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    
    
    
   {{--  <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    
    <!-- Jquery file -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    
    <!-- Boostrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script> --}}
    
    <!-- Base Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Library Css File -->
    @stack('css-file')
</head>

<body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-blue">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse container" id="navbarCollapse">
            <ul class="navbar-nav">
                <a class="navbar-brand" href="{{url('')}}">Confession</a>
            </ul>
            
            <div class="d-inline btn-login">
                @if (Auth::check())
                    <a class="name text-light dropdown-toggle" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                        {{Auth::user()->user_name}}
                        
                    </a>
                    <!-- // -->
                    <div class="nav-item dropdown">  
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @else
               
                    <a href="{{url('redirect/facebook')}}" class="float-right text-light btn-login"><i class="fab fa-facebook "></i> Login</a>
                @endif 
            </div>                      
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                @yield('listPost')
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                @yield('topPost')
            </div>

        </div>
    </div>

    <!-- FOOTER -->
    <div class="container-fluid footer block">
        <footer class="text-center docs-footer">
            <p><a href="#">Facebook | </a><a href="#">Github</a></p>
            <p>Design and build by <a href="#" style="color: #807fe2;">Quoc Nam</a></p>
        </footer>
    </div>
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/fontawesome-all.css') }}" /> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    @stack('js-file')

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    @stack('js-code')
</script>
</body>
</html>

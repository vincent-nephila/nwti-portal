<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juno</title>

    <!-- Fonts -->
    <link href="{{ asset('/css/fontawesome/font-awesome.css') }}" rel="stylesheet">


    <!-- Styles -->
    
    <link href="{{ asset('/jquery-ui/themes/ui-lightness/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('/jquery-ui/themes/ui-lightness/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

    
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <!--button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button-->

                <!-- Branding Image -->
                <img class="navbar-brand img-responsive navbar-logo" src="{{asset('images/logo.png')}}">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Xavier School
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (!Auth::guest())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    
    <div class="container_fluid footers">
        <div class="col-md-12"> 
            <p class="text-muted" style="color:#aaaaa6;"> Copyright 2016,Xavier School.  All Rights Reserved<br>
            <a href="http://www.nephilaweb.com.ph">Powered by: Nephila Web Technology, Inc</a></p>
        </div>
    </div>
    
    <!-- JavaScripts -->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery.min.js')}}"></script>
</body>
</html>

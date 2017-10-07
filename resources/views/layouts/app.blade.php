<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default" style="background-color: #fff;" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="font-family: Nunito;color: blue;font-size: 30px;font-weight: bold;font-stretch: 5px;background-color: #;border-right: 2px solid grey;">hookfish</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" style="color: #000000  ; background-color: #fff; ;font-size: 18px;">Buy in Mumbai</a></li>
      </ul>
        <form class="navbar-form navbar-left">
      <div class="input-group" style="padding-left: 180px;">
        <input type="text" class="form-control" size="70" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search gi-5x"></i>
          </button>
        </div>
      </div>      
    </form>
      <ul class="nav navbar-nav navbar-right">
      <li ><a href="#" style="color: #000000  ;font-size: 17px;"><i class="fa fa-heart-o"></i> Recommented</a></li>
        <li><a href="#" style="color: #000000  ;font-size: 17px;" ><i class="fa fa-heart-o" ></i> Favourites</a></li>
         @if (Auth::guest())
                           <li><a href="{{ route('login') }}" style="color: #000000  ;font-size: 17px;">Login</a></li>
                           <li><a href="{{ route('register') }}" style="color: #000000  ;font-size: 17px;">Register</a></li>
                       @else
                           <li class="dropdown">
                               <a href="#" class="dropdown-toggle" style="color: #000000  ;font-size: 17px;" data-toggle="dropdown" role="button" aria-expanded="false">
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>
       
                               <ul class="dropdown-menu" role="menu">
                                   <li>
                                       <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                           Logout
                                       </a>
       
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                                       </form>
                                   </li>
                               </ul>
                           </li>
                       @endif
      </ul>
    </div>
      </div>
</nav>
       <!--  <nav class="navbar navbar-default navbar-static-top">
           <div class="container">
               <div class="navbar-header">
       
                   Collapsed Hamburger
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                       <span class="sr-only">Toggle Navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
       
                   Branding Image
                   <a class="navbar-brand" href="#" style="font-family: Nunito;color: blue;font-size: 30px;font-weight: bold;font-stretch: 5px;background-color: #;">hookfish</a>
               </div>
       
               <div class="collapse navbar-collapse" id="app-navbar-collapse">
                   Left Side Of Navbar
                   <ul class="nav navbar-nav">
                       &nbsp;
                   </ul>
       
                   Right Side Of Navbar
                   <ul class="nav navbar-nav navbar-right">
                       Authentication Links
                       @if (Auth::guest())
                           <li><a href="{{ route('login') }}">Login</a></li>
                           <li><a href="{{ route('register') }}">Register</a></li>
                       @else
                           <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>
       
                               <ul class="dropdown-menu" role="menu">
                                   <li>
                                       <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                           Logout
                                       </a>
       
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                                       </form>
                                   </li>
                               </ul>
                           </li>
                       @endif
                   </ul>
               </div>
           </div>
       </nav>
        -->
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hookfish</title>
<meta name="description" content="Easieast way to buy property in below market price"/>
<meta name="keywords" content="hookfish,hook,fish,property,buy property,sale property,best property selling,home property,business property"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="{{asset('font/css/font-awesome.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/home.css')}}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
</head>
<body style="background-color: #f3f3f4;">
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
        
      </ul>
    </div>
      </div>
</nav>
<div class="container-fluid" style="background-color: #fff;width: 90%;height: 100%;">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 head1"  > 
            <strong>
                <h1 class="text-center"><p>Save 15<i class="fa fa-percent" style="font-size: 22px;"></i>  to 25<i class="fa fa-percent"  style="font-size: 22px;"></i></p></h1>
             <h1 class="" style="padding-left:85px;margin-top: -1%;">   <p class="on text-center"> <small class="sm text-center" >on</small>  Property</p></h1>
                <hr>
            </strong>
        </div>
        <div class="col-sm-3"> <a href="{{route('getSkip')}}"><u style="float: right;margin-bottom: 5%;">skip <i class="fa fa-step-forward" aria-hidden="true" style="font-size: 10px;"></i></u></a>  </div>
    </div>
    <div class="container" style="width: 51%;">
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
    <div class="row form-group">
       
    
        <div class="col-sm-3"></div>
        <form action= "{{route('getEntry')}}" method="get">
        <div class="col-sm-3 form-group">
   
      <input type="text" class="form-control " id="in1"  name="email"  placeholder=" E-mail"></div>
          <div class="col-sm-3 form-group">
            <input type="text" class="form-control" id="in1" name="phone" style="" placeholder=" Phone No">
            <!-- <p  style="margin-top: 3%;"> <a href="#" class="sign">Sign in</a>
              <a href=""  style="margin-left: 1%;float: right;" > <button type="submit" class="btn btn-primary" >Enter site</button></a></p>  -->
             <div style="float: right; margin-top:3%;">
              <a href="{{route('login')}}"> <button type="button" class="btn btn-default" style="border:none;color: blue;font-size: 16px;">Sign In</button></a>
               <a href="#"> <button type="submit" class="btn btn-info" style="font-size: 16px;">Enter Site</button></a>
                </div>
     
        </div>
        </form>
        <div class="col-sm-3"></div>
    </div>
     <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h3> <p style="padding-left:10px;">Sell & Earn</p></h3>
            <h5><p style="padding-left:10px;color: grey;">refer your friend and earn reward for same <a href=""> <u> <strong> INVITE NOW </strong></u></a> <strong> !</strong> </p> </h5>
        </div>
        <div class="col-sm-3"></div>
    </div>
    </div>
   <div class="container" style="width: auto;height: 50px;background-color: #fff;margin-top: 9.2%;">
  <div class="pull-right" style="margin-top: 1%;">
        <a href="">Terms &amp; Conditions <sup>*</sup></a>
    </div>
    <div style="margin-top: 1.2%;">
        Crafted By <strong> Hookfish Developer</strong>
    </div>
</div>
   <!-- <div class="footer" style="background: none repeat scroll 0 0 white;border-top: 1px solid #e7eaec;bottom: 0;left: 0;padding: 10px 20px;position: absolute;right: 0;height: 9%;">
    <div class="pull-right" style="margin-top: 1%;">
        <a href="">Terms &amp; Conditions <sup>*</sup></a>
    </div>
    <div style="margin-top: 1%;">
        Crafted By <strong> Hookfish Developer</strong>
    </div>
   </div> -->
 <!-- <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
      <p class="navbar-text pull-left">© 2014 - Site Built By Mr. M.
           <a href="http://tinyurl.com/tbvalid" target="_blank" >HTML 5 Validation</a>
      </p>
      
      <a href="http://youtu.be/zJahlKPCL9g" class="navbar-btn btn-danger btn pull-right">
      <span class="glyphicon glyphicon-star"></span>  Subscribe on YouTube</a>
    </div> -->
</body>
</html>
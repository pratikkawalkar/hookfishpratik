<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hookfish | entry</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="{{asset('font/css/font-awesome.css')}}" rel="stylesheet">
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
      <div class="input-group" style="padding-left: 300px;">
        <input type="text" class="form-control" style="" placeholder="Search">
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
        <li><a href="" style="color: #000000  ;font-size: 17px;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
      </div>
</nav>
 
 <div class="container" style="background-color: #fff;width: 90%;height: 100%;">
   <div class="row">
     <div class="col-sm-3"></div>
     <div class="col-sm-6">
       <section class="container">
    <div class="container-page">        
      <div class="col-md-6">
        
        <h3 class="dark-grey text-center">Registration</h3>
        <form action="" method="post">
           {{csrf_field()}}
        <div class="form-group col-lg-6">
          <label>First Name</label>
          <input type="text" name="name"  class="form-control" id="" value="">
        </div>
        <div class="form-group col-lg-6">
          <label>Last Name</label>
          <input type="text" name="lname" class="form-control" id="" value="">
        </div>
        
        <div class="form-group col-lg-6">
          <label>Email</label>
          <input type="email" name="email"  class="form-control" id="" value="">
        </div>
        <div class="form-group col-lg-6">
          <label>Phone No</label>
          <input type="text" name="phone" value="" class="form-control" id="" value="">
        </div>
        <div class="form-group col-lg-6">
          <label>Password</label>
          <input type="pasword" name="password"  class="form-control" id="" value="">
        </div>
        
        <div class="form-group col-lg-6">
        <label >Confirm Password</label>
        <input  type="password" class="form-control" name="password_confirmation" required>
        </div>
                
        <div class="form-group col-lg-6">
          <label>Location</label>
          <select class="form-control" id="sel1" name="location">
        
        <option>  Mumbai</option>
        <option>Pune</option>
        <option>Thane</option>
      </select>
        </div>
        
        <div class="form-group col-lg-6">
          <label>Sub-Location</label>
          <select class="form-control" id="sel1" name="subloc">
     
        <option>Churchgate</option>
        <option>Marine Lines</option>
        <option>Charni Road</option>
        <option>Grant Road</option>
        <option>Mumbai Central</option>
        <option>Mahalaxmi</option>
        <option>Lower Parel</option>
        <option>Prabhadevi</option>
        <option>Dadar</option>
        <option>Matunga Road</option>
        <option>Mahim</option>
        <option>Bandra</option>
        <option>Khar Road</option>
        <option>Santacruz</option>
        <option>Vile Parle</option>
        <option>Andheri</option>
        <option>Jogeshwari</option>
        <option>Ram Mandir</option>
        <option>Goregaon</option>
        <option>Malad</option>
        <option>Kandivali</option>
        <option>Borivali</option>
        <option>Dahisar</option>
        <option value="">Mira Road</option>
        <option value="">Bhayandar</option>
      </select>
        </div>      
          <div class="form-group col-lg-6">
          <label>Budget</label>
          <input type="text" name="budget" class="form-control" id="" value="">
        </div>
        
        <div class="form-group col-lg-6">
          <label>Configuration</label>
          <select class="form-control" id="sel1" name="config">
        <option>1 BHK</option>
        <option>2 BHK</option>
        <option>2.5 BHK</option>
        <option>3+ BHK</option>
      </select>
        </div>  
        <div class="col-sm-12">
          <button type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
        </div>        
      </form>
      <div class="col-sm-12">
        <h3 class="dark-grey text-center" style="padding-top: 10px;">Terms and Conditions</h3>
         <p class="text-center">
          By clicking on "Register" you agree to The Company's' Terms and Conditions
        </p>
      </div>
      
      </div>
    
     
    </div>
  </section>
     </div>
     <div class="col-sm-3"></div>
   </div>
 </div>
<div class="container" style="width: auto;height: 50px;background-color: #fff;margin-top: 7.9%;">
  
</div>
<!-- <div class="footer" style="background: none repeat scroll 0 0 white;border-top: 1px solid #e7eaec;bottom: 0;left: 0;padding: 10px 20px;position: absolute;right: 0;height: 9%;">
    <div class="pull-right" style="margin-top: 1%;">
        <a href="">Terms &amp; Conditions <sup>*</sup></a>
    </div>
    <div style="margin-top: 1%;">
        Crafted By <strong> Hookfish Developer</strong>
    </div> -->
</div>
</body>
</html>
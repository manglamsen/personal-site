<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><marquee class="mar">Computer world tutorials</marquee></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image4.png" alt="manglam sen" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/image5.png" alt="" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/image6.png" alt="New York" width="1100" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 <section class="my-5">
   <div class="py-5">
     <h3 class="text-center">About Us</h3>
   </div>
   <div class="container-fluid">

    <div class="row">
      <div class="col-lg-6 col-mg-6 col-12">
        <img src="images/image7.jpeg" class="img-fluid aboutimg">
      </div>
        <div class="col-lg-6 col-mg-6 col-12">
      <h2 class="display-4"> we are from from computer world tutorial</h2>
      <p class="py-3"> anything write</p>
      <a href="about.php "class="btn btn-success"> know more</a>
    </div>
    </div>
  </div>
 </section>

 <section class="my-5">
   <div class="py-5">
     <h3 class="text-center">Our services</h3>
   </div>
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-4 col-md-4 col-12">
         <div class="card">
      <img class="card-img-top" src="images/image3.png" alt="Card image">
      <div class="card-body">
     <h4 class="card-title">graphic design course</h4>
     <p class="card-text">Some example text.</p>
     <a href="https://www.youtube.com/channel/UCNTw5al-WwENuiTQjFT-Twg" class="btn btn-primary">see course</a>
   </div>
</div>


       </div>
       <div class="col-lg-4 col-md-4 col-12">
         <div class="card">
      <img class="card-img-top" src="images/image2.png" alt="Card image">
      <div class="card-body">
     <h4 class="card-title">Ethical hacking course</h4>
     <p class="card-text">Some example text.</p>
     <a href="https://www.youtube.com/watch?v=v0dB4L-Sx2o&list=PLGFjgYQtw1UhU1UnEIPX874mpiQqV2vtg" class="btn btn-primary">See course</a>
   </div>
</div>


       </div>
       <div class="col-lg-4 col-md-4 col-12">
         <div class="card">
      <img class="card-img-top" src="images/image1.png" alt="Cardimage">
      <div class="card-body">
     <h4 class="card-title">interview preperation course</h4>
     <p class="card-text">Some example text.</p>
     <a href="https://www.youtube.com/watch?v=aYzdEiKb97U&list=PLGFjgYQtw1UiQWxZR1aauGNR9y7cLz2MK" class="btn btn-primary">See course</a>
   </div>
</div>


       </div>
     </div>

   </div>
 </section>
 <div class="contact">
 <section class="my-5">
   <div class="py-5">
     <h3 class="text-center">contact</h3>
   </div>
   <div class="w-50 m-auto">
     <form class="" action="userinfo.php" method="post">
      <div class="form-group">
      <label for="">Username</label>
      <input type="text" name="User" value="" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="email" value="" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
      <label for="">Mobile</label>
      <input type="text" name="mobile" value="" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
      <label for="" name="comment">Comment</label>
      <textarea  class="form-control"></textarea>

      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
     </form>


   </div>
 </section>
</div>
      <footer >
        <p class="p-3 bg-dark text-white text-center">@computer world tutorials</p>
      </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  </body>
</html>

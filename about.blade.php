<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>danish</title>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <head><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet"  href="/assret/css/bootstyle.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">

<link rel="preconnect" href="https://fonts.gstatic.com">
<!-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;1,100&display=swap" rel="stylesheet"> -->
<!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="text">danish</a>
    @if(Session::has('message'))
  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
  @endif

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">services</a>
        </li>

       
        <li class="nav-item">
          <a class="nav-link" href="about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li>

          
         
   
        
      </ul>
      <form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
    </div>
  </div>
</nav>
<section class="my-5">

<div class="pd-5">
<h2 class="text-center"><b>about us</b></h2>
</div>
            <div class="container-fluid">
         <div class="row">
         <div class="col-lg-6 col-md-6 col-12">
         <img src="/assret/img/php.png" class="img-fluid abouting">
    </div>

    <div class="col-lg-6 col-md-6 col-12">
    <h1  class="">Web Design &amp; Development</h1> <p  class=""><h4>Web Development course is a only course you need to learn web development – HTML, CSS, JS, Node, and More! for free Join thousand of student’s From Around The World Already Learning On 
      
    code vs language.com</p> 
</h4>
         <p>
                        </p>
                        <a href="#"> about danish </a>
                          </div>
          </div>
        </div>
</section>
<div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="card" >
<img class="card-img-top" src="/assret/img/c 1.jpg" alt="Card image">
<div class="card-body">
<h4 class="card-title">c++</h4>
<p class="card-text">Dear Friend if you learn Object Orinted concepts, your first  programming Lnaguage is C++ </p>
<a href="#" class="btn btn-primary">learn now</a>
</div>
</div>
</div>


<div class="col-lg-4 col-md-4 col-12">
<div class="card" >
<img class="card-img-top" src="/assret/img/c pro.jpg" alt="Card image">
<div class="card-body">
<h4 class="card-title">c language</h4>
<p class="card-text">Dear friend C is your first programming Lnaguage. You can Learn full conceptual way.</p>
<a href="#" class="btn btn-primary">learn now</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-12">
<div class="card" >
<img class="card-img-top" src="/assret/img/max.jpg" alt="Card image">
<div class="card-body">
<h4 class="card-title">python</h4>
<p class="card-text">python is very  </p>
<a href="#" class="btn btn-primary">learn now </a>
</div>
</div>
</div>



</div>
</div>
</div>


              
            

            </section>
            

<footer class="footer-styel">
<main class="container-fluid">
<div class="row p-3">
<div class="col-md-4 col-12 offset-md-1">

                              <a aria-current="page" ><h2>CodeVsProgram</h2></a>
                               <a >CodeVsProgram is help to</a><br>
                          <a>solve your Co/ding problems like</a><br>
                          <a> C++, Java, Data Structure.</a><br>
                          <a>You always learn to best and practical way.</a><br>
                          <a aria-current="page" ><h2>pages</h2></a>
                          <a href="file">home</a><br>
                          <a href="#">serve</a><br>
                          <a href="#">contact</a><br>
                          <a href="#">contact</a><br>
</div>
<div class="col-md-4 col-12">

                      <a aria-current="page" ><h2>Categories
</h2></a>
                           <a href="#">Blog</a><br>
                          <a href="#">projects</a><br>
                          <a href="#">Web Development project</a><br>
                          <a href="#">C Programming Language</a><br>
                          <a href="#">c++</a><br>
                          <a href="#">jave </a><br>
                          <a href="#">php </a><br>
                          <a href="#">python </a><br>
                          <a href="#">Data Structure </a><br>
                          <a href="#">Data Structure program</a><br>

</div>
<div class="col-md-2 col-12">
 </a><br>

                             <a aria-current="page" ><h2>contact </h2></a>
                          <a >code vs language  </a><br>
                           <a href="#">abduldanish8090@gmail.com  </a><br>
                         

                          <a href="#"> facebook </a><br>
                
                <a class="fa fa-facebook-official" aria-hidden="true" href="#" > </a><br>

                <a href="#"> instagram </a><br>
                <a class="fa fa-instagram" aria-hidden="true" href="#"></a>

                          
                

                          </div>

                          


        

</footer>
<footer>
  <a href="#"> <p   class="p-3 bg-dark text-white text-center " ></i> @danishkhan</p>
</h4>
</footer>
</body>
</html>
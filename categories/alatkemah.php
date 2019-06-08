<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-light bismillah">
  <a class="navbar-brand" href="#">Mlaku.co</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="alatkemah.php">Alat Kemah</a>
          <a class="dropdown-item" href="alathiking.php">Alat Hiking</a>
          <a class="dropdown-item" href="pakaiantravelling.php">Pakaian Travelling</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul>
    <!-- copas ini pak -->
    <form class="form-inline my-2 my-lg-0" method="GET" action="pencarian.php">
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search" onkeyup="this.value = this.value.toLowerCase();"> 
<!--      <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>-->
    
    </form>
      <!-- sampai sini, ganti aja yang sebelumnya. -->
  </div>
</nav>

<div class="jumbotron jumbotron-fluid alhamdulillah2">
  <div class="container">
    <img src="matras.jpg" class="img">
  </div>
  <div class="containerkiri">
      MATRAS : 10K / 24 Jam
      <!-- <input type="text" name="harga" value="10000" disabled hidden> -->
    <a href='form.php?kodebar=5'><img src="cart.png" class="imgbutton"></a>
  </div>

  <div class="container2">
    <img src="tenda.jpg" class="img">
  </div>
  <div class="containerkanan">
      Tenda : 20K / 24 Jam
    <a href="form.php?kodebar=6"><img src="cart.png" class="imgbutton" ></a>
  </div>
  
  <div class="container3">
    <img src="kompor.jpg" class="img">
  </div>
  <div class="containerbawah">
      Kompor : 15K / 24 Jam
    <a href="form.php?kodebar=7"><img src="cart.png" class="imgbutton" ></a>
  </div>
</div>  

<div class="buttonnext">
<a href="alatkemah2.php"><button type="button" class="btn btn-success">Next</button></a>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  include '../dbconnect.php';
  include 'product.php';  
  include 'support.php';
?>

<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Pakaian Travelling</title>
  <div id="kepala1" class="shadow-sm py-1 sticky-top " >
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand a" href="index.html">Mlaku.co</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse sticky" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto pl-2">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
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
            <a class="nav-link my-2 my-lg-0 ml-5" href="../login.php">Sign in for Admin</a>
            <form class="form-inline my-2 my-lg-0" method="GET" action="../pencarian.php">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search" onkeyup="this.value = this.value.toLowerCase();"> 
        <!--      <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>-->
            
            </form>
            <!-- sampai sini, ganti aja yang sebelumnya. -->
        </div>
    </nav>
</div>
</head>

<body>
  <div class="table">
    <tr class="containerkiri">
      <div class="card" style="width: 18rem;">
        <?= "<img src='../img/images/".$item[8]['nama_foto']."' class='img card-img-top'>" ?>
      <!-- </div> -->
      <!-- <div class="containerkiri"> -->
        <div class="card-body">
          <div class="card-title"><?= $item[8]['nama_bar'], ": Rp", $item[8]['harga'], ",-"?> / 24 Jam</div>
          <a href="../transaction/cart.php?id_bar=9"><img src="../img/cart.png" class="imgbutton" ></a>
        </div>
      </div>
    </tr>

    <tr class="containerkanan">
      <div class="card" style="width: 18rem;">
        <?= "<img src='../img/images/".$item[9]['nama_foto']."' class='img card-img-top'>" ?>
      <!-- </div> -->
      <!-- <div class="containerkiri"> -->
        <div class="card-body">
          <div class="card-title"><?= $item[9]['nama_bar'], ": Rp", $item[9]['harga'], ",-"?> / 24 Jam</div>
          <a href="../transaction/cart.php??id_bar=10"><img src="../img/cart.png" class="imgbutton" ></a>
        </div>
      </div>
    </tr>

    <tr class="containerbawah">
      <div class="card" style="width: 18rem;">
        <?= "<img src='../img/images/".$item[10]['nama_foto']."' class='img card-img-top'>" ?>
      <!-- </div> -->
      <!-- <div class="containerkiri"> -->
        <div class="card-body">
          <div class="card-title"><?= $item[10]['nama_bar'], ": Rp", $item[10]['harga'], ",-"?> / 24 Jam</div>
          <a href="../transaction/cart.php??id_bar=11"><img src="../img/cart.png" class="imgbutton" ></a>
        </div>
      </div>
    </tr>

    <tr class="containerbawah">
      <div class="card" style="width: 18rem;">
        <?= "<img src='../img/images/".$item[11]['nama_foto']."' class='img card-img-top'>" ?>
      <!-- </div> -->
      <!-- <div class="containerkiri"> -->
        <div class="card-body">
          <div class="card-title"><?= $item[11]['nama_bar'], ": Rp", $item[11]['harga'], ",-"?> / 24 Jam</div>
          <a href="../transaction/cart.php?id_bar=12"><img src="../img/cart.png" class="imgbutton" ></a>
        </div>
      </div>
    </tr>

    <tr class="containerbawah">
      <div class="card" style="width: 18rem;">
        <?= "<img src='../img/images/".$item[12]['nama_foto']."' class='img card-img-top'>" ?>
      <!-- </div> -->
      <!-- <div class="containerkiri"> -->
        <div class="card-body">
          <div class="card-title"><?= $item[12]['nama_bar'], ": Rp", $item[12]['harga'], ",-"?> / 24 Jam</div>
          <a href="../transaction/cart.php?id_bar=13"><img src="../img/cart.png" class="imgbutton" ></a>
        </div>
      </div>
    </tr>
  </div>
</body>
</html>
<?php
  include 'dbconnect.php';
  include 'support.php';
  $search=$_GET['search'];
?>

<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css">
  <title>Hasil Pencarian</title>
  <div id="kepala1" class="shadow-sm py-1 sticky-top " >
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand a" href="index.html">Mlaku.co</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse sticky" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto pl-2">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                    </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="categories/alatkemah.php">Alat Kemah</a>
                    <a class="dropdown-item" href="categories/alathiking.php">Alat Hiking</a>
                    <a class="dropdown-item" href="categories/pakaiantravelling.php">Pakaian Travelling</a>
                </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
            <!-- copas ini pak -->
            <a class="nav-link my-2 my-lg-0 ml-5" href="login.php">Sign in for Admin</a>
            <form class="form-inline my-2 my-lg-0" method="GET" action="pencarian.php">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search" onkeyup="this.value = this.value.toLowerCase();"> 
        <!--      <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>-->
            
            </form>
            <!-- sampai sini, ganti aja yang sebelumnya. -->
        </div>
    </nav>
</div>
</head>
<body>
  <div class="jumbotron jumbotron-fluid alhamdulillah2">

    <?php
      $data=mysqli_query($konek, "SELECT i.nama_bar as 'nama_bar', i.harga as 'harga', f.nama_foto as 'nama_foto' FROM itemproduk i, fotoproduk f WHERE f.id_foto=i.id_foto AND i.nama_bar LIKE '%$search%'");
    ?>
    <?php while($sql= mysqli_fetch_array($data)){ ?>
      <div class="card" style="width: 18rem;">
        <?= "<img src='img/images/".$sql['nama_foto']."' class='img card-img-top'>" ?>

        <div class="card-body">
          <div class="card-title"><?= $sql['nama_bar'], ": Rp", $sql['harga'], ",-"?> / 24 Jam</div>
          <a href="transaction/cart.php?id_bar=6"><img src="img/cart.png" class="imgbutton" style="width:25px"></a>
        </div>
      </div> <br>
    <?php } ?>

  </div>  
</body>
</html>
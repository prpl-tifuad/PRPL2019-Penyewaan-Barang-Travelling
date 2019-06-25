<?php
  session_start();
  include '../dbconnect.php';
  include 'support.php';  
  $s=$_SESSION['s'];
?>

<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/style.css">
  <title>Form Data Pelanggan</title>
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
                      <a class="dropdown-item" href="../categories/alatkemah.php">Alat Kemah</a>
                      <a class="dropdown-item" href="../categories/alathiking.php">Alat Hiking</a>
                      <a class="dropdown-item" href="../categories/pakaiantravelling.php">Pakaian Travelling</a>
                  </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                  </li>
              </ul>
              <!-- copas ini pak -->
              <a class="nav-link my-2 my-lg-0 ml-5" href="login.php">Sign in for Admin</a>
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
  <form method="GET" action="upload.php">
    <div class="jumbotron jumbotron-fluid alhamdulillah2">
      <div class="containerform">
          <div class="form-group">
          
              <label for="email">E-mail</label>
              <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email" required>
              <br>
              <label for="text">Nama Lengkap</label>
              <input type="text" class="form-control" name="namalengkap" placeholder="Masukkan Nama Lengkap" required>
              <br>

              <label for="id">ID Pelanggan (KTP/SIM)</label>
              <input type="text" class="form-control" name="id" placeholder="Masukkan ID" required>
              <br>

              <label for="lamasewa">Lama Penyewaan (hari)</label>
              <input type="number" min=1 class="form-control" name="lamasewa" placeholder="Masukkan Lama Penyewaan" required>
              <br>
              
              <label for="tanggalpsn">Tanggal Pesan</label>
              <input type="date" class="form-control" name="tanggalpsn" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" required>

              <input type="hidden" name="kodebar" value="<?= $kodebar ?>">
          </div>
              
          <input type="submit" value="Next" class="btn btn-primary" onclick="return confirm('Data Anda sudah benar?');">

      </div> 
    </div>
    <?php
      $cart = unserialize(serialize($_SESSION['cart']));
      $_SESSION['cart']=$cart;
      $_SESSION['s']=$s;
    ?>
  </form>

  <!-- <div class="buttonnext"> -->
  <!-- <a href="alathiking2.php"><button type="button" class="btn btn-success">Next</button></a> -->
  <!-- </div> -->
</body>
</html>


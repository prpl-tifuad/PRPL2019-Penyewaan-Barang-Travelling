<?php

$namalengkap=$_POST['namalengkap'];
$email=$_POST['email'];
$id=$_POST['id'];
$jumlahbar=$_POST['jumlahbar'];
$lamasewa=$_POST['lamasewa'];
$tglpsn=$_POST['tanggalpsn'];
$kodebar=$_POST['kode'];

if($kodebar==1 || $kodebar==2 || $kodebar==4 || $kodebar==7 || $kodebar==8 || $kodebar==9){
  $harga=15000;
}
elseif ($kodebar==3 || $kodebar==5){
  $harga=10000;
}
elseif ($kodebar==6 || $kodebar==12 || $kodebar==13){
  $harga=20000;
}
elseif($kodebar==11 || $kodebar==14){
  $harga=25000;
}
elseif($kodebar==10){
  $harga=40000;
}
else{
  echo "error";
}

$totalbayar=$lamasewa * $jumlahbar * $harga;

?>

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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="alhamdulillah2">
</div>
<form method="POST" action="bukanform.php">

    <div class="containerform">
    <h4><b>CHECKOUT</b></h4>
    <br>
    <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email" value="<?php echo $email ?>" disabled>
        <br>
        <label for="text">Nama Lengkap</label>
        <input type="text" class="form-control" name="namalengkap" placeholder="Masukkan Nama Lengkap" value="<?php echo $namalengkap ?>" disabled>
        <br>

        <label for="id">ID Pelanggan (KTP/SIM)</label>
        <input type="text" class="form-control" name="id" placeholder="Masukkan ID" value="<?php echo $id ?>" disabled>
        <br>
        
        <label for="jumlahbar">Kode Barang</label>
        <input type="number" min=1 max=100 class="form-control" name="kodebar" placeholder="Masukkan Jumlah Barang" value="<?php echo $kodebar ?>" disabled>
        <br>

        <label for="jumlahbar">Jumlah Barang</label>
        <input type="number" min=1 max=100 class="form-control" name="jumlahbar" placeholder="Masukkan Jumlah Barang" value="<?php echo $jumlahbar ?>" disabled>
        <br>

        <label for="lamasewa">Lama Penyewaan (hari)</label>
        <input type="number" min=1 class="form-control" name="lamasewa" placeholder="Masukkan Lama Penyewaan" value="<?php echo $lamasewa ?>" disabled>
        <br>
        
        <label for="tanggalpsn">Tanggal Pesan</label>
        <input type="date" class="form-control" name="tanggalpsn" value="<?php echo $tglpsn ?>" disabled>
        <br>

        <label for="total">Total Pembayaran (Rp)</label>
        <input type="text" class="form-control" name="totalbayar" value="<?php echo $totalbayar ?>" disabled>
    </div>
    
    </div>
   
    </div> 

</form>

<div class="remember">
mohon foto / screenshot halaman ini, untuk ditunjukkan ketika mengambil barang
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>

<style>

input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
 
input[type="number"] {
    -moz-appearance: textfield;
}
    
</style>
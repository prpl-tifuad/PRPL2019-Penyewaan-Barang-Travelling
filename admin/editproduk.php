<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Lihat Barang</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand a" href="index.php">Mlaku.co</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse sticky" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto pl-2">
        <ul class="navbar-nav mr-auto pl-2">
            <!-- <li class="nav-item active">
                <a class="nav-link" href="tambahproduk.php">Tambah Barang <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item active">
                <a class="nav-link" href="view.php">Lihat Barang <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="lihatpesanan.php">Lihat Daftar Pemesanan <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <!-- copas ini pak -->
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ADMIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="">Log Out</a>
        </div>
        <form class="form-inline my-2 my-lg-0" method="GET" action="pencarian.php">
            <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search" onkeyup="this.value = this.value.toLowerCase();"> 
    <!--      <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>-->
        
        </form>
        <!-- sampai sini, ganti aja yang sebelumnya. -->
    </div>
</nav>
<hr>
<h3>Edit Barang</h3><hr>
<?php
// Load file koneksi.php
include "../dbconnect.php";
$id_bar = $_GET['id_bar'];

$query = "SELECT i.id_bar as 'id_bar', i.nama_bar as 'nama_bar', i.stok as 'stok', i.harga as 'harga', f.nama_foto as 'nama_foto' FROM itemproduk i,fotoproduk f WHERE f.id_foto=i.id_foto AND i.id_bar='$id_bar'";

// $query = "SELECT * FROM fotoproduk"; // Tampilkan semua data gambar
$sql = mysqli_query($konek, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  $data = mysqli_fetch_array($sql);// Ambil semua data dari hasil eksekusi $sql
  ?>
  <form method="POST" action="ubah.php" enctype="multipart/form-data">
    Nama Barang: 
        <input type='text' value='<?=$data['nama_bar']?>' placeholder='Masukkan Nama Barang' name='nabar' required> <br>
    Stok Barang:
        <input type='number' min=0 max=100 value='<?=$data['stok']?>' placeholder='Masukkan Stok Barang' name='stok' required> <br>
    Harga / 24 Jam (Rp):
        <input type='text' value='<?=$data['harga']?>' placeholder='Masukkan Harga Barang' name='harga' required> <br>
        <input type='text' name='nagam' value='<?=$data['nama_foto']?>' hidden>
        
    Foto Barang:
        
        <input type='file' name='gambar' required><br>
        
   <td><button>Submit</button></td>
    <!-- // echo "<td>".$data['nama_foto']."</td>";
    // echo "<td>".$data['ukuran']."</td>";
    // echo "<td>".$data['tipe']."</td>"; -->
  
<?php }else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
session_start();
$_SESSION['id_bar']=$id_bar;
?>
    </form>

</body>
</html>
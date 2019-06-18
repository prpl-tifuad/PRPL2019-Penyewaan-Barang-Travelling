<?php include 'support.php' ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/body.css">
    <link rel="stylesheet" href="../css/style.css">

    <script type="text/javascript" src="../js/script.js"></script>

    <title>Detail Pemesanan</title>
    <div id="kepala1" class="shadow-sm py-1 sticky-top " >
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand a" href="index.php">Mlaku.co</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sticky" id="navbarSupportedContent">
                        
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
                <div class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ADMIN
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                </div>
                
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
  
    <hr>
    <h3>Detail Pemesanan</h3><hr>
    <table border="1" cellpadding="8">
    <tr>
    <th>Nomor Pemesanan</th>
    <th>Tanggal Pesan</th>
    <th>ID Pelanggan</th>
    <th>Nama Pelanggan</th>
    <th>E-Mail Pelanggan</th>
    <th>Lama Sewa</th>
    <th>Total Harga (Rp)</th>
    </tr>

    <?php
        // Load file koneksi.php
        include "../dbconnect.php";
        $nopes=$_GET['nomorpemesanan'];
        $query = "SELECT d.no_pemesanan as 'nopes', d.tanggal_pesan as 'tglpsn', p.id_pelanggan as 'idpel', p.nama_pelanggan as 'napel', p.email as 'email', d.lama_pesan as 'lamasewa', d.total_harga as 'totalharga'
                    FROM detailpemesanan d, pemesanan p WHERE p.no_pemesanan=d.no_pemesanan AND d.no_pemesanan = '$nopes'";

        // $query = "SELECT * FROM fotoproduk"; // Tampilkan semua data gambar
        $sql = mysqli_query($konek, $query); // Eksekusi/Jalankan query dari variabel $query
        $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

        if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
            while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                echo "<tr>";
                echo "<td>".$data['nopes']."</td>";
                echo "<td>".$data['tglpsn']."</td>";
                echo "<td>".$data['idpel']."</td>";
                echo "<td>".$data['napel']."</td>";
                echo "<td>".$data['email']."</td>";
                echo "<td>".$data['lamasewa']." hari</td>";
                echo "<td>".$data['totalharga']."</td>";
                echo "</tr>";
            }          
    ?>
       
            <table border='1' id=''>
                <br><br>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga / 24 Jam (Rp)</th>
                    <th>Kuantitas</th> 
                    <!-- <th>SubTotal</th> -->
                </tr>
                Barang yang dipesan:
                <?php
                
                    $query2 = "SELECT i.nama_bar as 'namabar', pp.harga as 'harga', pp.kuantitas as 'kuantitas' FROM itemproduk i, produkpemesanan pp WHERE pp.id_bar = i.id_bar AND pp.nomor_pemesanan LIKE '$nopes'";
                    $sql2 = mysqli_query($konek, $query2);
                    // var_dump($sql2); die();
                    // $total=0;
                    while($data = mysqli_fetch_array($sql2)){
                        echo "<tr>";
                        echo "<td>".$data['namabar']."</td>";  
                        echo "<td>".$data['harga']."</td>";  
                        echo "<td>".$data['kuantitas']."</td>"; 
                        // $subtotal=$data['harga']*$data['kuantitas'];
                        // echo "<td>".$subtotal."</td>";
                        // $total=$total+$subtotal;
                    }
                    echo "<tr>";
                    // echo "<td></td>";
                    // echo "<td></td>";
                    // echo "<th colspan=3>Jumlah</th>";
                    // echo "<td>".$total."</td>";
                    // echo "</tr>";
                
            
        }

        else{ // Jika data tidak ada
            echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
        }
                 ?>      
            </table>

</body>

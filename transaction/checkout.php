<?php 
session_start();
require '../dbconnect.php';
require 'item.php';

$nopes=$_SESSION['nopes'];

$namalengkap=$_SESSION['namalengkap'];
$email=$_SESSION['email'];
$id=$_SESSION['id'];
//$jumlahbar=$_SESSION['jumlahbar'];
$lamasewa=$_SESSION['lamasewa'];
$tglpsn=$_SESSION['tanggalpsn'];
// $kodebar=$_SESSION['kodebar'];
?>
<head>
    <title>Checkout</title>
</head>
<body>
    <div class="containerform">
        <h4><b>CHECKOUT</b></h4>
        <br>
        <div class="form-group">
            <label for="tanggalpsn">Nomor Pemesanan</label>
            <input type="text" class="form-control" name="nopes" value="<?= $nopes ?>" disabled>
            <br>
            <label for="tanggalpsn">Tanggal Pesan</label>
            <input type="date" class="form-control" name="tanggalpsn" value="<?php echo $tglpsn ?>" disabled>
            <br>
            <label for="email">E-Mail</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email" value="<?php echo $email ?>" disabled>
            <br>
            <label for="text">Nama Lengkap</label>
            <input type="text" class="form-control" name="namalengkap" placeholder="Masukkan Nama Lengkap" value="<?php echo $namalengkap ?>" disabled>
            <br>

            <label for="id">ID Pelanggan (KTP/SIM)</label>
            <input type="text" class="form-control" name="id" placeholder="Masukkan ID" value="<?php echo $id ?>" disabled>
            <br><br>
        </div>
    <!-- </div> -->

        Barang yang dipesan:
        <table id="t01">
            <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Kuantitas</th> 
                <th>Jumlah Harga</th>
            </tr>

            <?php 
                $cart = unserialize(serialize($_SESSION['cart']));
                $s = 0;
                $index = 0;
                for($i=0; $i<count($cart); $i++){
                    $s += $cart[$i]->price * $cart[$i]->quantity;
            ?>

            <tr>
                    <td> <?php echo $cart[$i]->name; ?> </td>
                    <td>Rp. <?php echo $cart[$i]->price; ?> </td>
                    <td> <input type="text" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]" disabled> </td>  
                    <td> Rp.<?php echo $cart[$i]->price * $cart[$i]->quantity; ?> </td> 
            </tr>

            <?php 
                $index++;
            } ?>

            <tr>
                <td colspan="5" style="text-align:right; font-weight:bold">Sum 
                </td>
                <td> Rp.<?php echo $s; ?> </td>
                </tr>
        </table>
        <br>

        <?php 
            if(isset($_GET["id"]) || isset($_GET["index"])){
            //  header('Location: cart.php');
            } 
        ?>

        <label for="lamasewa">Lama Penyewaan (hari)</label>
        <input type="text" name="lamasewa" placeholder="Masukkan Lama Penyewaan" value="<?php echo $lamasewa ?>" disabled>
        <br>

        <?php $totalbayar = $s * $lamasewa ?>
        <label for="total">Total Pembayaran (Rp)</label>
        <input type="text" class="form-control" name="totalbayar" value="<?php echo $totalbayar ?>" disabled>
    
        <br><br>
        Mohon mengajukan nomor pemesanan atau menunjukkan tampilan ini untuk mengambil barang di tempat sesuai pesanan.
        (Bisa menunjukkan halaman ini langsung atau diScreenshot)
    </div>

    <?php
        $cart = unserialize(serialize($_SESSION['cart']));
        // $_SESSION['cart']=$cart;
        // $_SESSION['totalharga']=$totalharga;

        unset($_SESSION['cart']);
    ?>
     <a href="../index.php"><input type="button" value="Menu Utama" class="btn btn-primary";"></a>
</body>
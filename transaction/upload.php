<?php
  include '../dbconnect.php';
  require 'item.php';

  session_start();

  $s=$_SESSION['s'];

  $namalengkap=$_GET['namalengkap'];
  $email=$_GET['email'];
  $id=$_GET['id'];
  //$jumlahbar=$_GET['jumlahbar'];
  $lamasewa=$_GET['lamasewa'];
  $tglpsn=$_GET['tanggalpsn'];
  // $kodebar=$_GET['kodebar'];

  $totalharga=$s * $lamasewa;
  // var_dump($totalharga); die();

  function acak($panjang)
  {
      $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
      $string = '';
      for ($i = 0; $i < $panjang; $i++) {
    $pos = rand(0, strlen($karakter)-1);
    $string .= $karakter{$pos};
      }
      return $string;
  }

  // $sqlnya=mysqli_query($konek, "SELECT no_pemesanan as nopesnya FROM detailpemesanan");
  // var_dump($sqlnya); die();
  // function nopes(){
      $nopes=acak(15);
      // foreach($sqlnya as $data){
      //     if($nopes==$data['nopesnya']){
      //         nopes();
      //     }
      // }

  // }

  // nopes();

  // $ordersid = mysqli_in
  // Save new orders
  $sql1 = "INSERT INTO `detailpemesanan` (`no_pemesanan`, `lama_pesan`, `total_harga`, `tanggal_pesan`) VALUES ('$nopes', '$lamasewa', '$totalharga', '$tglpsn')";
  $tes2=mysqli_query($konek, $sql1);
  // var_dump($tes2); die();

  $sql0 = "INSERT INTO `pemesanan`(`id_pesan`, `id_pelanggan`, `nama_pelanggan`, `email`, `no_pemesanan`) VALUES ('', '$id', '$namalengkap', '$email', '$nopes')";
  $tes0=mysqli_query($konek, $sql0);
  // var_dump($tes0); die();

  // $ordersid = mysqli_insert_id($con); 

  // Save order details for new orders
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
    // $sql2 = 'INSERT INTO oderdetail (`productid`, `orderid`, `price`, `quantity`) VALUES ('.$cart[$i]->id.', '.$ordersid.', '.$cart[$i]->price.', '.$cart[$i]->quantity.')';
    $sql2 = "INSERT INTO `produkpemesanan`(`id_order`, `nomor_pemesanan`, `id_bar`, `harga`, `kuantitas`) VALUES ('', '$nopes', ".$cart[$i]->id.", ".$cart[$i]->price.", ".$cart[$i]->quantity.")";

    $tes1=mysqli_query($konek, $sql2);
      // var_dump($tes1); die();
  }
  // Clear all product in cart
  // unset($_SESSION['cart']);

  $_SESSION['nopes']=$nopes;
  $_SESSION['namalengkap']=$namalengkap;
  $_SESSION['email']=$email;
  $_SESSION['id']=$id;
  $_SESSION['lamasewa']=$lamasewa;
  $_SESSION['tanggalpsn']=$tglpsn;
  $_SESSION['totalharga']=$totalharga;

  header('Location: checkout.php'); 
 ?>
 <!-- Thanks for buying products. Click <a href="index.php">here</a> to continue purchasing products. -->
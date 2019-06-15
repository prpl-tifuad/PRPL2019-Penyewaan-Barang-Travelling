<?php
$n=(mysqli_query($konek, "SELECT COUNT(*) as 'jumlah' FROM itemproduk"))->fetch_array();
$jumlah=$n['jumlah'];
// var_dump($jumlah); die();
for($i = 0; $i<$jumlah; $i++){
// echo "$i";
    $item[$i]=(mysqli_query($konek, "SELECT i.id_bar as 'id_bar', i.nama_bar as 'nama_bar', i.stok as 'stok', i.harga as 'harga', f.nama_foto as 'nama_foto' FROM itemproduk i,fotoproduk f WHERE f.id_foto=i.id_foto && id_bar=$i+1"))->fetch_array();
}

// die();
//0 $matras = (mysqli_query($konek, "SELECT i.id_bar as 'id_bar', i.nama_bar as 'nama_bar', i.stok as 'stok', i.harga as 'harga', f.nama_foto as 'nama_foto' FROM itemproduk i,fotoproduk f WHERE f.id_foto=i.id_foto && id_bar=1"))->fetch_array()  ;
// // var_dump($matras); die();
//1 $tenda = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=2"))->fetch_array();
//2 $kompor = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=3"))->fetch_array();
//3 $tas = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=4"))->fetch_array();
//4 $sleepingbag = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=5"))->fetch_array();
//5 $sepatu = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=6"))->fetch_array();
//6 $sendal = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=7"))->fetch_array();
//7 $headlamp = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=8"))->fetch_array();
//8 $setjaket = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=9"))->fetch_array();
//9 $jaket1 = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=10"))->fetch_array();
//10 $jaket2 = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=11"))->fetch_array();
//11 $jaket3 = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=12"))->fetch_array();
//12 $celana = (mysqli_query($konek, "SELECT* FROM itemproduk WHERE id_bar=13"))->fetch_array();
?>
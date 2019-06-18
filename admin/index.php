<?php 
    include 'support.php';
    session_start();
    if(isset($_SESSION['session_username'])){
        
?>

<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/body.css">
<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="js/script.js"></script>

<head>
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
                <div class="nav-item dropdown my-2 my-lg-0 ml-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<body class="bg">
    <h1> WELCOME, ADMIN! </h1>

</body>

<?php } ?>
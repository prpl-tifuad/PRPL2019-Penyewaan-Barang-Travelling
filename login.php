<?php include 'support.php' ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    
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
                        <a class="dropdown-item" href="./categories/alatkemah.php">Alat Kemah</a>
                        <a class="dropdown-item" href="./categories/alathiking.php">Alat Hiking</a>
                        <a class="dropdown-item" href="./categories/pakaiantravelling.php">Pakaian Travelling</a>
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
                     <!-- <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>-->
                
                </form>
                <!-- sampai sini, ganti aja yang sebelumnya. -->
            </div>
        </nav>
    </div>
</head>

<body>    

<div class="jumbotron jumbotron-fluid alhamdulillah2">
    <div class="container">  
        <div class="posisi_login">
            <div class="kotak_login">
                <p class="tulisan_login">Silahkan login</p>

                <form method="POST" action="process.php">
                    <label>Username</label>
                    <input type="text" name="username" class="form_login" placeholder="Username" required oninvalid="this.setCustomValidity('Username wajib diisi!')" oninput="setCustomValidity('')">


                    <label>Password</label>
                    <input type="password" name="password" class="form_login" placeholder="Password" required oninvalid="this.setCustomValidity('Password wajib diisi!')" oninput="setCustomValidity('')">

                    <input type="submit" class="tombol_login" value="LOGIN">
                    <?php if(isset($_GET["failed"])) echo "Incorrect Username/Password!"; ?>
                </form>
            </div>
        </div>
    </div>
</div>
  </body>
</html>
<?php 

 ?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../style.css">  
      <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
      <!-- dari google -->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
      <meta content="utf-8" http-equiv="encoding">
      <title>SIP SMK N X Yogyakarta</title>
    </head>

    <body>        
          <!-- Dropdown Structure -->
          <ul id="dropdown1" class="dropdown-content">
           
          </ul>
          <nav class="teal">
            <!-- <div class="container"> -->
            <div class="nav-wrapper">
              <a href="" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <a href="admin.php" class="brand-logo" style="margin-left: 10px;"><i class="material-icons">school</i>SIP</a>
              <ul class="right hide-on-med-and-down">
                <!-- Dropdown Trigger -->
                <a class="dropdown-trigger" href="logout.php" >
                <li><i class="material-icons right">power_settings_new</i></li>
                <li>Keluar</li>
                </a>
              </ul>
              <ul class="right hide-on-med-and-down">           
                <li><i class="material-icons right">account_circle</i></li>
                <li>Salman At Toyibi (masuk)</li>                              
              </ul>
            </div>
        
          </nav>
          <ul class="sidenav" id="mobile-nav">
            <i class="material-icons">local_library</i><b> MASTER DATA</b>
            <li class="bold"><a class="waves-effect waves-teal"  href="peserta_didik.php">Peserta Didik</a></li>
            <li><a href="kelas.php">Kelas</a></li>
            <li><a href="jurusan.php">Jurusan</a></li>
            <li><a href="tahun_ajaran_tambah.php">Tahun Ajaran</a></li>
                      
                      <!-- <li><a href="sass.html">Tentang</a></li>
                      <li><a href="badges.html">Kontak</a></li> -->
                              <!-- Dropdown Trigger -->
            <br><hr>
            <i class="material-icons">money</i><b> PEMBAYARAN</b>
            <li><a href="pembayaran.php">Pembayaran</a></li>
            <li><a href="pembayaran_kategori.php">Kategori Pembayaran</a></li>
            <li><a href="pembayaran_tagihan_pilihan_tombol.php">Tagihan Pembayaran</a></li>
            <li><a href="jadwal.php">Jadwal Pembayaran</a></li>
                      
                      
                      
            <br><hr>
            <i class="material-icons">local_library</i><b> INFORMASI</b>
            <li><a href="pembayaran_jadwal.php">Jadwal Pembayaran</a></li>
            <li><a href=""></a></li>

          </ul>

          
       


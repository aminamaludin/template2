<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="style.css">  

      <!-- dari google -->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
      <meta content="utf-8" http-equiv="encoding">
      <title>SIP SMK N 7 Purworejo</title>
    </head>

    <body>
         
          

          <!-- navbar fixed -->
          <div class="navbar-fixed">
          <nav class="teal">
            <div class="container">
            <div class="nav-wrapper">
              <a href="" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <a href="index.php" class="brand-logo"><i class="material-icons">school</i>SIP</a>
              
              <ul class="right hide-on-med-and-down">
                
                <!-- Dropdown Trigger -->
                <a class="dropdown-trigger" href="logout.php" data-target="dropdown1">
                <li><i class="material-icons right">power_settings_new</i></li>
                <li>Keluar</li>
                </a>

                
              </ul>
              <ul class="right hide-on-med-and-down">
                
                <!-- Dropdown Trigger -->
              <?php 
                  //kita cari nama user disini 
                $varNis           = $_SESSION["nis"];
                $varQCekNama      = mysqli_query($varKoneksi, "SELECT pd_nama FROM tb_peserta_didik WHERE pd_nis='$varNis'");
                $varECekNama      = mysqli_fetch_array($varQCekNama);
                 ?>

                
              </ul>
            </div>
        
          </nav>
          </div>
          <ul class="sidenav" id="mobile-nav"><br>
            <li><b>&nbsp;&nbsp;<i class="material-icons waves-effect waves-light ">menu</i>Menu</b></li>
            <li><a href="peserta_didik_profil.php"><i class="material-icons waves-effect waves-light ">account_circle</i><?= strtolower($varECekNama['pd_nama']) ?> (masuk)</a></li>
            <li><a href="logout.php"><i class="material-icons waves-effect waves-light ">power_settings_new</i>Keluar</a></li>
          </ul>  
        
       


        
      <!-- Tabel Content -->
        
      <!-- Akhir Content -->

      






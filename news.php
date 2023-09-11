<?php
include "koneksi.php";
session_start();
?>



<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Bootstrap css-->
  <title>Layanan Keimigrasian</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">


  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

  <!-- sweet alert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" />



  <!--My style -->
  <link rel="stylesheet" href="style1.css">

  <!--Fonts Style -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,100&display=swap" rel="stylesheet">
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/logo.jpg" alt="" width="60" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Sejarah</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Tugas Pokok dan Fungsi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Visi Misi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Profil Pejabat</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pelayanan publik
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Informasi BAP</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Daftar Isian Pelaksanaan Anggaran (DIPA)</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Wilayah Kerja</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Prosedur Layanan
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Layanan Warga Negara Idonesia</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Layanan Warga Negara Asing</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-item" href="news.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Berita
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-item" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hubungi Kami
          </a>
        </li> 
      </ul>
    </div>
  </div>
</nav>

   <!--Caousell Slide-->
   <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/project-1-img/imigrasi_kediri2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Kantor Imigrasi Kelas II Kota Kediri</h5>
          <p>“Imigrasi PASTI AKTUAL” (Aktif, Kreatif, Terpercaya, Unggul, Amanah dan Logis) diharapkan jajaran imigrasi dapat menjadi Penjaga Pintu Gerbang Negara yang selalu menjaga kedaulatan Negara dengan penuh keikhlasan.</p>
          <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/project-1-img/imigrasi_kediri1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Kantor Imigrasi Kelas II Kota Kediri</h5>
          <p>“Imigrasi PASTI AKTUAL” (Aktif, Kreatif, Terpercaya, Unggul, Amanah dan Logis) diharapkan jajaran imigrasi dapat menjadi Penjaga Pintu Gerbang Negara yang selalu menjaga kedaulatan Negara dengan penuh keikhlasan.</p>
          <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/project-1-img/imigrasi_kediri4.jpg" class="w-100" alt="...">
        <div class="carousel-caption">
          <h5>Kantor Imigrasi Kelas II Kota Kediri</h5>
          <p>“Imigrasi PASTI AKTUAL” (Aktif, Kreatif, Terpercaya, Unggul, Amanah dan Logis) diharapkan jajaran imigrasi dapat menjadi Penjaga Pintu Gerbang Negara yang selalu menjaga kedaulatan Negara dengan penuh keikhlasan.</p>
          <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Section News -->
  <section id="service" class="sevices section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Berita</h2>
          </div>
        </div>
      </div>

      <div class="row g-3">
      <?php 
          $x = mysqli_query($conn, "SELECT * FROM berita ORDER BY idberita DESC");

          while($y = mysqli_fetch_array($x)){
        ?>
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="fotoberita/<?php echo $y['foto'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $y['judul'] ?></h5>
                    <p class="card-text"><?php echo $y['deskripsi'] ?></p>
                    <a href="<?php echo $y['linkberita'] ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
</body>
</html>
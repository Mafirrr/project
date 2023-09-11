
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Bootstrap css-->
  <title>Layanan Keimigrasian</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

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
          <a class="nav-link dropdown-item" href="news.php" id="navbarDropdown" role="button">Berita</a>
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
  <!--<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">News</a>
          </li>

        </ul>
        <li class="dropdown notification-list">
          <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
            <span class="account-user-avatar">
              <img src="img/photo.png" alt="user-image" class="rounded-circle" width="30">
            </span>
            <span>
              <span class="account-user-name"><?php echo $nm; ?></span>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">

            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome ! <?php echo $nm; ?></h6>
            </div>
            <a href="logout.php" class="dropdown-item notify-item" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
              <i class="mdi mdi-logout me-1"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </div>
    </div>-->
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

  <!-- Profil -->
  <section id="profil" class="profil section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Profil Pejabat</h1>
                <div class="card-body bg-dark">
                    <a class="btn btn-warning" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1"><h3>Kepala Kantor</h3></a>
                    <div class="collapse" id="collapse1">
                        <p>Tes</p>
                    </div>
                    <div class="btn btn-warning col-md-3 mt-3 m-3"><h3>Kepala Seksi</h3></div>
                    <div class="btn btn-warning col-md-3 mt-3 m-3"><h3>Kasubsi</h3></div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- News section -->
  <section id="berita" class="news section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Berita Keimigrasian</h2>
            <p class="mg-bt-60">Ikuti Terus Informasi dan Berita tentang Kantor Imigrasi Kediri</p>
          </div>
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-4">
            <h3>Kategori Berita <br><br></h3>
            <?php 
              include 'koneksi.php';

              $x = mysqli_query($conn, "SELECT * FROM kategori ORDER BY idkategori DESC");

              while($y = mysqli_fetch_array($x)){
            ?>
            <ul>
              <li><a href=""><span class="float-left"><?php echo $y['kategori']?></span></a> <br></li>
            </ul>
            <?php } ?>
            <a href="" class="btn btn-sm btn-primary text-1 text-uppercase mt-3">Lihat Semua</a>
        </div>
        <div class="col-md-8 col-12">
          <div class="row g-3">
            <?php 
              $x = mysqli_query($conn, "SELECT * FROM berita ORDER BY idberita DESC LIMIT 2");

              while($y = mysqli_fetch_array($x)){
            ?>
            <div class="col-lg-6">
              <div class="card" style="width: 21rem;">
                <img class="card-img-top" src="fotoberita/<?php echo $y['foto'] ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $y['judul'] ?></h5>
                  <a class="card-text" href="<?php echo $y['linkberita'] ?>"><?php echo $y['deskripsi'] ?></a>
                </div>
              </div>
            </div>
            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </section>


</body>
</html>

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

  <!--About Section-->
  <section id="about" class="about section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ps-lg-5">
          <div class="about-text">
            <h2>TUGAS DAN FUNGSI</h2>
            <p>TUGAS DAN FUNGSI
Tugas dan Fungsi Kantor Imigrasi Kelas II Kediri <br>

Tugas : <br>

Kantor Imigrasi Kelas II Kediri mempunyai tugas melaksanakan sebagian tugas pokok dan fungsi Kementerian Hukum dan HAM di bidang Keimigrasian khususnya di wilayah kerja Kantor Imigrasi Kelas II Keidiri. <br>

Fungsi :<br>

– melaksanakan tugas Keimigrasian dibidang Informasi dan Sarana Komunikasi Keimigrasian;<br>
– melaksanakan tugas Keimigrasian dibidang Lalu lintas Keimigrasian;<br>
– melaksanakan tugas Keimigrasian dibidang Status Keimigrasian;<br>
– melaksanakan tugas Keimigrasian dibidang Pengawasan dan Penindakan Keimigrasian.<br><br>

Berikut ini tugas – tugas pokok dari setiap Pejabat Imigrasi :<br><br>

� Kepala Kantor Imigrasi<br>

Tugas Pokok :<br>

Mengkoordinasikan pelaksanaan di bidang keimigrasian meliputi informasi dan sarana komunikasi, lintas antar negara dan perizinan, pengendalian status serta melakukan pengawasan dan penindakan terhadap mereka yang melanggar ketentuan keimigrasian berdasarkan peraturan perundang-undangan yang berlaku dalam rangka tertibnya pelaksanaan tugas di bidang keimigrasian.<br><br>

� Kepala Sub Bagian Tata Usaha<br>

Tugas Pokok :<br>

Mengkoordinasikan penyelenggaraan Tata Usaha dan Rumah Tangga Kantor Imigrasi Klas I yang antara lain meliputi urusan surat menyurat, kepegawaian, keuangan, perlengkapan dan rumah tangga serta memberikan pelayanan administrasi di lingkungan Kantor Imigrasi Klas I sesuai dengan peraturan perundang-undangan yang berlaku.<br><br>

� Kepala Urusan Keuangan<br>

Tugas Pokok :<br>

Melaksanakan urusan keuangan yang meliputi anggaran belanja rutin dan pembangunan di lingkungan kantor sesuai dengan ketentuan peraturan perundang-undangan yang berlaku.<br><br>

� Kepala Urusan Kepegawaian<br>

Tugas Pokok :<br>

Melaksanakan urusan kepegawaian yang meliputi formasi mutasi, pemberhentian dan pemensiunan di lingkungan kantor sesuai dengan peraturan perundang-undangan yang berlaku.<br><br>

� Kepala Urusan Umum<br>

Tugas Pokok :<br>

Melaksanakan urusan umum yang meliputi surat menyura, perlengkapan dan rumah tangga di lingkungan kantor sesuai dengan peraturan perundang-undangan yang berlaku.<br><br>

� Kepala Seksi Lalu Lintas Keimigrasian<br>

Tugas Pokok :<br>

Melakukan kegiatan keimigrasian yang meliputi pemberian perlintasan, pemberian pemohonan dokumen perjalanan izin berangkat / kembali bagi warga negara asing atau warga negara Indonesia serta kegiatan dalam hal perjalanan, pendaratan, urusan haji, pengurusan anak kapal dan izin masuk darurat sesuai dengan peraturan perundang-undangan yang berlaku dalam rangka menunjang kelancaran pelayanan keimigrasian.<br><br>

� Kepala Sub Seksi Perizinan Keimigrasian<br>

Tugas Pokok :<br>

Melakukan pemberian dokumen perjalanan, izin berangkat dan izin kembali bagi WNA maupun WNI sesuai dengan peraturan perundang-undangan yang berlaku guna tertibnya WNA / WNI yang keluar maupun masuk negara Indonesia.<br><br>

� Kepala Sub Seksi Lintas Batas<br>

Tugas Pokok :<br>

Memberikan perizinan Lintas Batas bagi warga negara asing yang hendak masuk ke Indonesia maupun warga negara Indonesia yang hendak pergi ke luar Indonesia sesuai perjanjian Lintas Batas yang telah ditetapkan dalam rangka tertibnya keluar masuk melalui pos perbatasan.<br><br>

� Kepala Seksi Pengawasan dan Penindakan Keimigrasian<br>

Tugas Pokok :<br>

Melakukan pengawasan dan penindakan serta penanggulangan terhadap WNA dan pemukim gelap yang melanggar ketentuan Keimigrasian di lingkungan kantor sesuai dengan peraturan perundang-undangan yang berlaku dalam rangka menertibkan WNA yang masuk ke wilayah Republik Indonesia.<br><br>

� Kepala Sub Seksi Penindakan Keimigrasian<br>

Tugas Pokok :<br>

Melakukan penyidikan dan penindakan, pencegahan dan penangkalan, penampungan sementara orang asing yang melakukan pelanggaran Keimigrasian berdasarkan peraturan perundang-undangan yang berlaku.<br><br>

� Kepala Sub Seksi Pengawasan Keimigrasian<br>

Tugas Pokok :<br>

Melakukan pengawasan terhadap WNA yang masuk ke wilayah Republik Indonesia maupun WNI yang akan berpergian ke luar negeri serta mengadakan kerja sama antar instansi yang ada kaitannya dalam bidang pengawasan orang asing berdasarkan peraturan perundang-undangan yang berlaku.<br><br>

� Kepala Seksi Status Keimigrasian<br>

Tugas Pokok :<br>

Mengkoordinasikan pelaksanaan pemantauan status keimigrasian, pendayagunaan warga negara asing pendatang maupun pemukin dan alih status izin tinggal, serta melaksanakan penelaahan dan penilaian tentang status keimigrasian orang asing, pemukim berdasarkan peraturan perundang-undangan yang berlaku dalam rangka tertibnya pelaksanaan tugas.<br><br>

� Kepala Sub Seksi Penentuan Status Keimigrasian<br>

Tugas Pokok :<br>

Melakukan penyaringan, penelitian, penyelesaian permohonan alih status dan izin tinggal keimigrasian sesuai dengan ketentuan yang berlaku.<br><br>

� Kepala Sub Seksi Penelaahan Status Keimigrasian<br>

Tugas Pokok :<br>

Melakukan penelitian terhadap kebenaran bukti kewarganegaraan seseorang dan memberikan surat keterangan orang asing untuk kelengkapan permohonan kewarganegaraan.<br><br>

� Kepala Seksi Informasi dan Sarana Komunikasi Keimigrasian<br>

Tugas Pokok :<br>

Melakukan pengumpulan, pengolahan serta penyajian data informasi dan penyebarannya untuk penyidikan keimigrasian serta melakukan pemeliharaan dokumentasi keimigrasian sesuai dengan ketentuan yang berlaku guna kelancaran pelaksanaan tugas Seksi Informasi dan Sarana Komunikasi Keimigrasian.<br><br>

� Kepala Sub Seksi Informasi<br>

Tugas Pokok :<br>

Melakukan penyebaran dan pemantauan informasi mengenai WNI yang berangkat ke luar negeri dan orang asing yang masuk ke Indonesia dalam rangka pengamanan teknis keimigrasian.<br><br>

� Kepala Sub Seksi Komunikasi<br>

Tugas Pokok :<br>

Melakukan pemeliharaan dan pengamanan dokumentasi keimigrasian serta menggunakan sarana komunikasi keimigrasian dalam rangka pelaksanaan tugas.</p>
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
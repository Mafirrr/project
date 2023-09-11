
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
            <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="tugaspokok.php">Tugas Pokok dan Fungsi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Visi Misi</a></li>
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
        <div class="col-lg-4 col-md-12 col-12">
          <div class="about-img">
            <img src="img/project-1-img/PASPOR-800px.jpg" alt="" class="img-fluid">
          </div>
        </div>
        
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="about-text">
            <h2>We Provided Best Quality <br>Service Ever</h2>
            <p>Paspor adalah dokumen resmi yang dikeluarkan oleh pejabat yang berwenang dari suatu negara yang memuat identitas pemegangnya dan berlaku untuk melakukan perjalanan antar negara. Paspor berisi biodata pemegangnya yang meliputi antara lain foto pemegang, tanda tangan, tempat dan tanggal kelahiran, informasi kebangsaan dan kadang-kadang juga beberapa informasi lain mengenai identifikasi individual. Adakalanya pula sebuah paspor mencantumkan daftar negara yang tidak boleh dimasuki oleh si pemegang paspor itu.</p>
            <a href="" class="btn btn-warning">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--Service section-->
  <section id="pelayanan" class="about section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Informasi Publik</h2>
          </div>

          <div class="row g-3">
            <div class="col-lg-6">
              <div class="card bg-info pb-2">
                <div class="card-body">
                  <h4 class="card-title text-white text-center bi bi-people" style="font-size: 30px;">Warga Negara Indonesia</h2>
                  <div class="col-lg-12">
                    <div class="card card-body">
                      <a class="btn btn-success" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">Informasi Layanan Publik</a>
                      <div class="collapse" id="collapse1">
                        <div class="card card-body">
                          <ul>
                            <li>
                              <p>Layanan WNI</p>
                              <ul>
                                <li><a href="#">Anak Berkewarganegaraan Ganda</a></li>
                                <li><a href="#">APEC Business Travel Card (ABTC) </a></li>
                                <li><a href="#">Paspor Biasa</a></li>
                                <li><a href="#">Penarikan, Pembatalan, Pencabutan dan Penggantian Paspor Biasa</a></li>
                                <li><a href="#">Penggantian Paspor Hilang dan Rusak</a></li>
                                <li><a href="#">Permohonan Paspor RI</a></li>
                                <li><a href="#">Rekomendasi Visa Bekerja dan Berlibur (Work and Holiday Visa)</a></li>
                                <li><a href="#">Surat Perjalanan Laksana Paspor Untuk WNI</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">Pembuatan Paspor Dewasa</a>
                      <div class="collapse" id="collapse2">
                        <div class="card card-body">
                          <h1><span style="font-weight: normal;">PASPOR DEWASA</span></h1>
                          <h2><span style="font-weight: normal;">Umum</span></h2>
                          <div><br></div>
                          <ul>
                            <li>Paspor biasa terdiri atas Paspor biasa non elektronik, Paspor biasa elektronik dan paspor elektronik polikarbonat.<br><br></li>
                            <li>Paspor biasa diterbitkan dengan menggunakan Sistem Informasi Manajemen Keimigrasian.<br><br></li>
                            <li>Permohonan paspor biasa dapat diajukan dengan melampirkan dokumen kelengkapan persyaratan Asli.</li>
                          </ul>

                          <h2><span style="font-weight: normal;">Persyaratan</span></h2>
                          <div><br></div>
                          <ul>
                            <li>KTP Elektronik / Surat Keterangan Perekaman KTP-el sebagai pengganti KTP-el sementara dari Disdukcapil.<br><br></li>
                            <li>Kartu Keluarga<br><br></li>
                            <li>Akta Kelahiran / Ijazah (SD/SMP/SMA) / Akta Perkawinan atau Buku Nikah / Surat Baptis * (Harus memuat Nama, Tempat Tanggal Lahir dan Nama Orang Tua)<br><br></li>
                            <li>Surat Pewarganegaraan Indonesia (jika ada)<br><br></li>
                            <li>Surat Ganti Nama (jika ada)</li>
                          </ul>

                          <h2><span style="font-weight: normal;">Catatan</span></h2>
                          <div><br></div>
                          <ul>
                            <li>Petugas berhak meminta syarat tambahan jika diperlukan.<br><br></li>
                            <li>Semua data pada dokumen yang dipersyaratkan harus sama.<br><br></li>
                            <li>Dokumen asli harus dibawa dan difotokopi di kertas A4 (tidak dipotong).</li>
                          </ul>

                          <h2><span style="font-weight: normal;">Prosedur</span></h2>
                          <div><br></div>
                          <ul>
                            <li>Pendaftaran melalui aplikasi m-paspor yang dapat diunduh melalui Playstore / Appstore.<br><br></li>
                            <li>Pemohon mengisi data pemohon di aplikasi m-paspor, memilih lokasi dan tanggal kedatangan serta telah melakukan pembayaran.<br><br></li>
                            <li>Pemohon datang sesuai dengan lokasi dan tanggal kedatangan dengan membawa persyaratan kelengkapan persyaratan Asli.<br><br></li>
                            <li>Petugas memeriksa dokumen kelengkapan persyaratan, wawancara dan pengambilan data biometrik pemohon.<br><br></li>
                            <li>Setelah dinyatakan lengkap petugas memberikan tanda terima permohonan<br><br></li>
                            <li>Dalam hal dokumen kelengkapan persyaratan belum lengkap, petugas dapat mengembalikan dokumen permohonan dan permohonan dianggap batal.</li>
                          </ul>

                          <h2><span style="font-weight: normal;">Biaya</span></h2>
                          <div><br></div>
                          <ul>
                            <li>Paspor Biasa 48 Halaman Rp.350.000<br><br></li>
                            <li>Layanan Paspor Percepatan 48 Halaman Rp.1.000.000 (*diluar biaya Paspor Rp. 350.000)</li>
                          </ul>
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">Paspor Anak Dibawah 17 Tahun</a>
                      <div class="collapse" id="collapse3">
                        <div class="card card-body">
                          <h2><span style="font-weight: normal;">PASPOR ANAK DIBAWAH 17 TAHUN</span></h2>
                          <h2><span style="font-weight: normal;">Umum</span></h2>
                          <ul>
                            <li>Permohonan paspor dapat diajukan untuk anak dibawah 17 Tahun yang belum memiliki KTP-el.<br><br></li>
                            <li>Paspor biasa terdiri atas Paspor biasa non elektronik, Paspor biasa elektronik dan paspor elektronik polikarbonat.<br><br></li>
                            <li>Paspor biasa diterbitkan dengan menggunakan Sistem Informasi Manajemen Keimigrasian.<br><br></li>
                            <li>Permohonan paspor biasa dapat diajukan dengan melampirkan dokumen kelengkapan persyaratan Asli.</li>
                          </ul>
                          
                          <h2><span style="font-weight: normal;"><span style="font-size: 1.875rem;">Persyaratan</span><br></span></h2>
                          <div><br></div>
                          <ul>
                            <li>KTP Elektronik Kedua Orang Tua<br><br></li>
                            <li>Kartu Keluarga<br><br></li>
                            <li>Akta Kelahiran Anak<br><br></li>
                            <li>Akta Perkawinan atau Buku Nikah Orang Tua<br><br></li>
                            <li>Surat Pernyataan Orang Tua (Download Disini)<br><br></li>
                            <li>Paspor Orang Tua<br><br></li>
                            <li>Surat Ganti Nama (jika ada)</li>
                          </ul>

                          <h2><span style="font-weight: normal;"><span style="font-size: 1.875rem;">Catatan</span><br></span></h2>
                          <div><br></div>
                          <ul>
                            <li>Permohonan paspor anak harus didampingi oleh kedua orang tua, apabila salah satu orang tua berhalangan hadir maka wajib membawa surat kuasa bermaterai.<br><br></li>
                            <li>Surat cerai dan penetapan hak asuh anak apabila orang tua telah bercerai.<br><br></li>
                            <li>Surat keterangan beda domisili jika orang tua berbeda domisili dengan anak.<br><br></li>
                            <li>Semua data pada dokumen yang dipersyaratkan harus sama<br><br></li>
                            <li>Dokumen asli harus dibawa dan difotokopi di kertas A4 (tidak dipotong)<br><br></li>
                            <li>Petugas berhak meminta syarat tambahan jika diperlukan.</li>
                          </ul>

                          <h2><span style="font-weight: normal;"><span style="font-size: 1.875rem;">Prosedur</span><br></span></h2>
                          <div><br></div>
                          <ul>
                            <li>Pendaftaran melalui aplikasi m-paspor yang dapat diunduh melalui Playstore / Appstore.<br><br></li>
                            <li>Pemohon mengisi data pemohon di aplikasi m-paspor, memilih lokasi dan tanggal kedatangan serta telah melakukan pembayaran.<br><br></li>
                            <li>Pemohon datang sesuai dengan lokasi dan tanggal kedatangan dengan membawa persyaratan kelengkapan persyaratan Asli.<br><br></li>
                            <li>Petugas memeriksa dokumen kelengkapan persyaratan, wawancara dan pengambilan data biometrik pemohon.<br><br></li>
                            <li>Setelah dinyatakan lengkap petugas memberikan tanda terima permohonan.<br><br></li>
                            <li>Dalam hal dokumen kelengkapan persyaratan belum lengkap, petugas dapat mengembalikan dokumen permohonan dan permohonan dianggap batal.</li>
                          </ul>

                          <h2><span style="font-weight: normal;"><span style="font-size: 1.875rem;">Biaya</span><br></span></h2>
                          <div><br></div>
                          <ul>
                            <li>Paspor Biasa 48 Halaman Rp.350.000<br><br></li>
                            <li>Layanan Paspor Percepatan 48 Halaman Rp.1.000.000 (*diluar biaya Paspor Rp. 350.000)</li>
                          </ul>
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">Calon Pekerja Migran Indonesia</a>
                      <div class="collapse" id="collapse4">
                        <div class="card card-body">
                          <h2><span style="font-weight: normal;">Calon Pekerja Migran Indonesia</span></h2>
                          <h2><span style="font-weight: normal;">Umum</span></h2>
                          <ul>
                            <li>Permohonan paspor dapat diajukan oleh Calon Pekerja Migran yang akan bekerja di Luar Negeri.<br><br></li>
                            <li>Paspor biasa terdiri atas Paspor biasa non elektronik, Paspor biasa elektronik dan paspor elektronik polikarbonat.<br><br></li>
                            <li>Paspor biasa diterbitkan dengan menggunakan Sistem Informasi Manajemen Keimigrasian.<br><br></li>
                            <li>Permohonan paspor biasa dapat diajukan dengan melampirkan dokumen kelengkapan persyaratan Asli.</li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Persyaratan</span></h2>
                          <ul>
                            <li>KTP Elektronik / Surat Keterangan Perekaman KTP-el sebagai pengganti KTP-el sementara dari Disdukcapil.<br><br></li>
                            <li>Kartu Keluarga<br><br></li>
                            <li>Akta Kelahiran / Ijazah (SD/SMP/SMA) / Akta Perkawinan atau Buku Nikah / Surat Baptis *<br><br></li>
                            <li>* (Harus memuat Nama, Tempat Tanggal Lahir dan Nama Orang Tua)<br><br></li>
                            <li>Surat rekomendasi yang diterbitkan oleh Dinas Tenaga Kerja Provinsi atau Kabupaten / Kota atau surat rekomendasi dari Badan Perlindungan Pekerja Migran Indonesia (BP2MI)<br><br></li>
                            <li>Surat panggilan kerja ke luar negeri, bagi PMI yang sudah terikat kontrak dengan pengguna di luar negeri/ surat Perjanjian kerja.<br><br></li>
                            <li>Surat Pewarganegaraan Indonesia (jika ada)<br><br></li>
                            <li>Surat Ganti Nama (jika ada)</li>
                          </ul>

                          <h2><span style="font-weight: normal;"><br>Catatan</span></h2>
                          <div><br></div>
                          <ul>
                            <li>Petugas berhak meminta syarat tambahan jika diperlukan.<br><br></li>
                            <li>Semua data pada dokumen yang dipersyaratkan harus sama.<br><br></li>
                            <li>Dokumen asli harus dibawa dan di fotokopi di kertas A4 (tidak dipotong).</li>
                          </ul>
                          
                          <div><br></div>
                          <h2><span style="font-weight: normal;">Prosedur</span></h2>
                          <ul>
                            <li>Pendaftaran melalui aplikasi m-paspor yang dapat diunduh melalui Playstore / Appstore.<br><br></li>
                            <li>Pemohon mengisi data pemohon di aplikasi m-paspor, memilih lokasi dan tanggal kedatangan serta telah melakukan pembayaran.<br><br></li>
                            <li>Pemohon datang sesuai dengan lokasi dan tanggal kedatangan dengan membawa persyaratan kelengkapan persyaratan Asli.<br><br></li>
                            <li>Petugas memeriksa dokumen kelengkapan persyaratan, wawancara dan pengambilan data biometrik pemohon.<br><br></li>
                            <li>Setelah dinyatakan lengkap petugas memberikan tanda terima permohonan.<br><br></li>
                            <li>Dalam hal dokumen kelengkapan persyaratan belum lengkap, petugas dapat mengembalikan dokumen permohonan dan permohonan dianggap batal.</li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Biaya</span></h2>
                          <ul>
                            <li>Paspor Biasa 48 Halaman Rp.350.000<br><br></li>
                            <li>Layanan Paspor Percepatan 48 Halaman Rp.1.000.000 (*diluar biaya Paspor Rp. 350.000)</li>
                          </ul>
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse5">Ibadah Haji/Umroh</a>
                      <div class="collapse" id="collapse5">
                        <div class="card card-body">
                          <h2><span style="font-weight: normal;">Ibadah Haji /Ibadah Umroh</span></h2>
                          <h2><span style="font-weight: normal;">Umum</span></h2>
                          <ul>
                            <li>Permohonan paspor dapat diajukan oleh pemohon dalam rangka melaksanakan Haji / Umroh.<br><br></li>
                            <li>Paspor biasa terdiri atas Paspor biasa non elektronik, Paspor biasa elektronik dan paspor elektronik polikarbonat.<br><br></li>
                            <li>Paspor biasa diterbitkan dengan menggunakan Sistem Informasi Manajemen Keimigrasian.<br><br></li>
                            <li>Permohonan paspor biasa dapat diajukan dengan melampirkan dokumen kelengkapan persyaratan Asli.<br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Persyaratan</span></h2>
                          <ul>
                            <li>KTP Elektronik / Surat Keterangan Perekaman KTP-el sebagai pengganti KTP-el sementara dari Disdukcapil.<br><br></li>
                            <li>Kartu Keluarga<br><br></li>
                            <li>Akta Kelahiran / Ijazah (SD/SMP/SMA) / Akta Perkawinan atau Buku Nikah / Surat Baptis *<br><br></li>
                            <li>* (Harus memuat Nama, Tempat Tanggal Lahir dan Nama Orang Tua)<br><br></li>
                            <li>Surat Rekomendasi dari Travel Umroh<br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Catatan</span></h2>
                          <ul>
                            <li>Petugas berhak meminta syarat tambahan jika diperlukan.<br><br></li>
                            <li>Semua data pada dokumen yang dipersyaratkan harus sama.<br><br></li>
                            <li>Dokumen asli harus dibawa dan di fotokopi di kertas A4 (tidak dipotong).<br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Prosedur</span></h2>
                          <ul>
                            <li>Pendaftaran melalui aplikasi m-paspor yang dapat diunduh melalui Playstore / Appstore.<br><br></li>
                            <li>Pemohon mengisi data pemohon di aplikasi m-paspor, memilih lokasi dan tanggal kedatangan serta telah melakukan pembayaran.<br><br></li>
                            <li>Pemohon datang sesuai dengan lokasi dan tanggal kedatangan dengan membawa persyaratan kelengkapan persyaratan Asli.<br><br></li>
                            <li>Petugas memeriksa dokumen kelengkapan persyaratan, wawancara dan pengambilan data biometrik pemohon.<br><br></li>
                            <li>Setelah dinyatakan lengkap petugas memberikan tanda terima permohonan.<br><br></li>
                            <li>Dalam hal dokumen kelengkapan persyaratan belum lengkap, petugas dapat mengembalikan dokumen permohonan dan permohonan dianggap batal.<br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Biaya</span></h2>
                          <ul>
                            <li>Paspor Biasa 48 Halaman Rp.350.000<br><br></li>
                            <li>Layanan Paspor Percepatan 48 Halaman Rp.1.000.000 (*diluar biaya Paspor Rp. 350.000)<br><br></li>
                          </ul>
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse6" role="button" aria-expanded="false" aria-controls="collapse6">Penggantian Paspor Yang Habis Masa Berlaku</a>
                      <div class="collapse" id="collapse6">
                        <div class="card card-body">
                          <h2><span style="font-weight: normal;">Penggantian Paspor Yang Habis Masa Berlaku</span></h2>
                          <h2><span style="font-weight: normal;">Persyaratan</span></h2>
                          <ul>
                            <li>E-KTP (yang masih berlaku)<br><br></li>
                            <li>Paspor Lama<br><br></li>
                            <li>Surat pewarganegaraan Indonesia bagi orang asing yang memperoleh kewarganegaraan Indonesia melalui kewarganegaraan atau penyampaian atau pernyataan untuk memilih kewarganegaraan sesuai ketentuan perundang-undangan<br><br></li>
                            <li>Penetapan ganti nama dari pejabat yang berwenang bagi yang telah ganti nama;<br><br></li>
                            <li>Bagi yang bertujuan untuk bekerja, melampirkan surat rekomendasi dari Dinas Tenaga Kerja setempat, BNP3TKI atau Ditjen BINALATTAS. Lampirkan buku pelaut dan BST untuk tujuan bekerja diatas alat angkut (kapal laut);<br><br></li>
                            <li>Untuk penggantian paspor bagi anak di bawah umur, melampirkan persyaratan lengkap sebagaimana tertera pada halaman Paspor Baru.<br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Catatan</span></h2>
                          <ul>
                            <li>Petugas berhak meminta syarat tambahan jika diperlukan.<br><br></li>
                            <li>Semua data pada dokumen yang dipersyaratkan harus sama<br><br></li>
                            <li>Dokumen asli harus dibawa dan difotokopi di kertas A4 (tidak dipotong)<br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Prosedur</span></h2>
                          <ul>
                            <li>Pendaftaran melalui aplikasi m-paspor yang dapat diunduh melalui Playstore / Appstore.<br><br></li>
                            <li>Pemohon mengisi data pemohon di aplikasi m-paspor, memilih lokasi dan tanggal kedatangan serta telah melakukan pembayaran.<br><br></li>
                            <li>Pemohon datang sesuai dengan lokasi dan tanggal kedatangan dengan membawa persyaratan kelengkapan persyaratan Asli.<br><br></li>
                            <li>Petugas memeriksa dokumen kelengkapan persyaratan, wawancara dan pengambilan data biometrik pemohon.<br><br></li>
                            <li>Setelah dinyatakan lengkap petugas memberikan tanda terima permohonan<br><br></li>
                            <li>Dalam hal dokumen kelengkapan persyaratan belum lengkap, petugas dapat mengembalikan dokumen permohonan dan permohonan dianggap batal.<br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Biaya</span></h2>
                          <ul>
                            <li>Paspor Biasa 48 Halaman Rp.350.000<br><br></li>
                            <li>Paspor Percepatan 48 Halaman Rp. 1.350.000 Berdasarkan Peraturan Pemerintah (PP) Nomor 28 Tahun 2019 Tentang Jenis dan Tarif Atas Jenis Penerimaan Negara Bukan Pajak yang Berlaku Pada Kementerian Hukum dan Hak Asasi Manusia.<br><br></li>
                          </ul>                              
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse7" role="button" aria-expanded="false" aria-controls="collapse7">Penggantian Paspor Karena Hilang/Rusak</a>
                      <div class="collapse" id="collapse7">
                        <div class="card card-body">
                          <h2><span style="font-weight: normal;">Penggantian Paspor Karena Hilang/Rusak</span></h2>
                          <h2><span style="font-weight: normal;">Persyaratan</span></h2>
                          <ul>
                            <li>Mengisi formulir permohonan paspor RI dengan benar dan lengkap (perdim 11 yang didapat di Kantor Imigrasi / website kantor imigrasi) <br><br></li>
                            <li>Melampirkan fotokopi dan berkas asli identitas diri, antara lain: <br><br></li>
                            <li>Kartu Tanda Penduduk Elektronik ( E-KTP );<br><br></li>
                            <li>Paspor Lama yang diterbitkan setelah Tahun 2009 dan diterbitkan di Kantor Imigrasi di Indonesia. <br><br></li>
                            <li>Melampirkan surat keterangan hilang dari kepolisian apabila paspor lama hilang; <br><br></li>
                            <li>Surat pewarganegaraan Indonesia bagi orang asing yang memperoleh kewarganegaraan Indonesia melalui kewarganegaraan atau penyampaian atau pernyataan untuk memilih kewarganegaraan sesuai ketentuan perundang-undangan; <br><br></li>
                            <li>Penetapan ganti nama dari pejabat yang berwenang bagi yang telah ganti nama; <br><br></li>
                            <li>Bagi yang bertujuan untuk bekerja, melampirkan surat rekomendasi dari Dinas Tenaga Kerja setempat, BNP3TKI atau Ditjen BINALATTAS. Lampirkan buku pelaut dan BST untuk tujuan bekerja diatas alat angkut (kapal laut); <br><br></li>
                            <li>Untuk penggantian paspor bagi anak di bawah umur, melampirkan persyaratan lengkap sebagaimana tertera pada halaman Paspor Baru. <br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Prosedur</span></h2>
                          <ul>
                            <li>Datang ke Kantor Imigrasi di Konter Loket; <br><br></li>
                            <li>Pemeriksaan Dokumen oleh Customer Service; <br><br></li>
                            <li>Penyerahan dokumen ke Seksi Inteldakim, kemudian dilakukan Proses BAP (Berita Acara Pemeriksaan); <br><br></li>
                            <li>1 Hari Kerja Kemudian Datang Kembali Menunggu Berita Acara Pemeriksaan & Surat Keputusan; <br><br></li>
                            <li>Pengambilan Biometrik & Wawancara; <br><br></li>
                            <li>Melakukan Pembayaran Melalui POS atau Bank Persepsi; 3 Hari Kerja Setelah Pembayaran Paspor Siap Diambil atau Dikirim Melalui POS. <br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Biaya</span></h2>
                          <ul>
                            <li>Paspor Biasa 48 Halaman Rp.350.000 <br><br></li>
                            <li>Layanan Paspor Percepatan 48 Halaman Rp.1.000.000 (*diluar biaya Paspor Rp. 350.000) <br><br></li>
                            <li>Biaya Beban Paspor Hilang Rp.1.000.000 (*diluar biaya Paspor Rp. 350.000) <br><br></li>
                            <li>Biaya Beban Paspor Rusak Rp. 500.000 (*diluar biaya Paspor Rp. 350.000) <br><br></li>
                          </ul>
                          <div><br></div>
                          <div>Berdasarkan Peraturan Pemerintah (PP) Nomor 28 Tahun 2019 Tentang Jenis dan Tarif Atas Jenis Penerimaan Negara Bukan Pajak yang Berlaku Pada Kementerian Hukum dan Hak Asasi Manusia.</div>
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse8" role="button" aria-expanded="false" aria-controls="collapse8">Avidavit (Anak Berkewarganegaraan Ganda)</a>                    
                      <div class="collapse" id="collapse8">
                        <div class="card card-body">
                          <h2>Subjek Anak Berkewarganegaraan Ganda</h2>
                          <ul style="margin-bottom: 0px; font-size:14.4px;">
                            <li>untuk pengertian lengkapnya merupakan pengertian yang diambil dari pasal 4 dan pasal 5 Undang-undang nomor 12 tahun 2006 tentang Kewarganegaraan yang terdapat 6 (enam) poin pengertian yaitu: <br><br></li>
                            <li>anak yang lahir dari perkawinan yang sah dari seorang ayah Warga Negara Indonesia dan ibu Warga Negara Asing; <br><br></li>
                            <li>anak yang lahir dari perkawinan yang sah dari seorang ayah Warga Negara Asing dan ibu Warga Negara Indonesia; <br><br></li>
                            <li>anak yang lahir di luar perkawinan yang sah dari seorang ibu Warga Negara Asing yang diakui oleh seorang ayah Warga Negara Indonesia sebagai anaknya dan pengakuan itu dilakukan sebelum anak tersebut berusia 18 (delapan belas) tahun atau belum kawin; <br><br></li>
                            <li>anak yang dilahirkan di luar wilayah negara Republik Indonesia dari seorang ayah dan ibu Warga Negara Indonesia yang karena ketentuan dari negara tempat anak tersebut dilahirkan memberikan kewarganegaraan kepada anak yang bersangkutan; <br><br></li>
                            <li>anak Warga Negara Indonesia yang lahir di luar perkawinan yang sah, belum berusia 18 (delapan belas) tahun dan belum kawin diakui secara sah oleh ayahnya yang berkewarganegaraan asing tetap diakui sebagai Warga Negara Indonesia; <br><br></li>
                            <li>anak Warga Negara Indonesia yang belum berusia 5 (lima) tahun diangkat secara sah sebagai anak oleh warga negara asing berdasarkan penetapan pengadilan tetap diakui sebagai Warga Negara Indonesia. <br><br></li>
                            <li>Pendaftaran Anak Berkewarganegaraan Ganda wajib dilakukan oleh orangtua atau wali anak. Status Anak Berkewarganegaraan Ganda dan fasilitas keimigrasian berlaku sampai anak berusia 21 (dua puluh satu) tahun. Setelah itu, anak harus memilih kewarganegaraan (WNI atau WNA). <br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Syarat Permohonan Pendaftaran Anak Berkewarganegaraan Ganda</span></h2>
                          <ul>
                            <li>Mengisi Formulir Pendaftaran <br><br></li>
                            <li>E-Ktp Orang Tua yang masih berlaku <br><br></li>
                            <li>Kartu Keluarga (nama anak telah terdaftar di KK) <br><br></li>
                            <li>Akta Kelahiran Anak  <br><br></li>
                            <li>Akta Perkawinan, Buku Nikah, atau Akta Perceraian Orang Tua <br><br></li>
                            <li>Paspor Kebangsaan Asing Anak yang masih berlaku *apabila memiliki <br><br></li>
                            <li>Paspor Kebangsaan Asing Ayah / Ibu <br><br></li>
                            <li>Pas Foto Anak Berkewarganegaraan Ganda terbaru berwarna dan berukuran 4 x 6 sebanyak 5 lembar. <br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Fasilitas Keimigrasian bagi Anak Berkewarganegaraan Ganda</span></h2>
                          <div>Fasilitas keimigrasian yang didapatkan oleh Anak Berkewarganegaraan Ganda yang sudah terdaftar adalah:pembebasan dari kewajiban memiliki visa; pembebasan dari kewajiban memiliki izin keimigrasian dan izin masuk kembali; dan pemberian tanda masuk atau tanda keluar yang diperlakukan sebagaiamana layaknya Warga Negara Indonesia. <br><br> Syarat Permohan Fasilitas Keimigrasian (Faskim) <br><br></div>
                          <ul>
                            <li>Formulir Pendaftaran (diisi dengan tinta hitam); <br><br></li>
                            <li>Surat Permohnan dari orang tua; <br><br></li>
                            <li>KTP ayah/ ibu WNI (asli dan fotocopy); <br><br></li>
                            <li>Kartu Keluarga yang sudah tercantum nama anak (asli dan fotocopy); <br><br></li>
                            <li>Akta Lahir anak dari Dispendukcapil (asli dan fotocopy); <br><br></li>
                            <li>Akta Nikah/ Akta Lapor Nikah Dispendukcapil/ Akta Perceraian/ Akta Kematian (asli dan fotocopy); <br><br></li>
                            <li>Paspor RI dan paspor asing anak (jika sudah ada); <br><br></li>
                            <li>Fotocopy paspor ayah/ ibu WNI; <br><br></li>
                            <li>Fotocopy paspor ayah/ ibu WNA (jika ada); <br><br></li>
                            <li>Fotocopy Izin Tinggal ayah/ ibu WNA (jika ada); <br><br></li>
                            <li>Pas foto anak terbaru dengan latar belakang putih, ukurang 4×6 cm sebanyak 4 lembar; <br><br></li>
                            <li>Keputusan Menteri Hukum dan HAM (jika anak lahir sebelum 1 Agustus 2006); <br><br></li>
                            <li>Bukti pendaftaran Anak Berkewarganegaraan Ganda (Sertifikat Pendaftaran Anak Berkewarganegaraan Ganda); <br><br></li>
                            <li>Surat Kuasa (bermaterai) dan fotocopy KTP penerima kuasa. <br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Alur Proses Pendaftaran ABG dan Permohonan Fasilitas Keimigrasian</span></h2>
                          <ul>
                            <li>Penyerahan dokumen persyaratan ke Kantor Imigrasi; <br><br></li>
                            <li>Entri data pada Sistem Keimigrasian; <br><br></li>
                            <li>Pembayaran PNBP (ATM atau tranfer bank); <br><br></li>
                            <li>Pemindaian dokumen; <br><br></li>
                            <li>Proses persetujuan permohonan oleh pejabat yang berwenang <br><br></li>
                            <li>Penyerahan dokumen (2 hari kerja setelah penyerahan dokumen). <br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Syarat Anak Berkewarganegaraan Ganda Terbatas Memilih WNI/ WNA</span></h2>
                          <ul>
                            <li>Surat Permohnan dari orang tua; <br><br></li>
                            <li>KTP, KK, dan Paspor ayah/ ibu WNI (asli dan fotocopy); <br><br></li>
                            <li>Sertifikat Pendaftaran Anak Berkewarganegaraan Ganda (asli dan fotocopy); <br><br></li>
                            <li>Kartu Fasilitas Keimigrasian (Faskim) (asli dan fotocopy); <br><br></li>
                            <li>Paspor RI dan Paspor asing anak (asli dan fotocopy); <br><br></li>
                            <li>Surat Keputusan Menteri (asli dan fotocopy); <br><br></li>
                            <li>Surat Kehilangan Kewarganegaraan dari Kedutaan/ Perwakilan Negara Asing (jika memilih WNI); <br><br></li>
                            <li>Akta Lahir anak dari Dispendukcapil (asli dan fotocopy); <br><br></li>
                            <li>Akta Nikah/ Akta Lapor Nikah Dispendukcapil/ Akta Perceraian/ Akta Kematian (aslid dan fotocopy); <br><br></li>
                            <li>Fotocopy paspor ayah/ ibu WNA (jika ada); dan <br><br></li>
                            <li>Fotocopy Izin Tinggal ayah/ ibu WNA (jika ada). <br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Syarat Pengembalian Dokumen Keimigrasian Bagi Subjek ABG</span></h2>
                          <ul>
                            <li>Surat permohonan dari orang tua WNI; <br><br></li>
                            <li>Fotocopy KTP dan Kartu Keluarga ayah/ ibu WNI; <br><br></li>
                            <li>ITAS/ KITAP anak (asli dan fotocopy); <br><br></li>
                            <li>Paspor anak (asli dan fotocopy); <br><br></li>
                            <li>Akta Lahir anak dari Dispendukcapil (asli dan fotocopy); <br><br></li>
                            <li>Akta Nikah/ Akta Lapor Nikah Dispendukcapil/ Akta Perceraian/ Akta Kematian (asli dan fotocopy); <br><br></li>
                            <li>Surat Keputusan AHU (asli dan fotocopy) <br><br></li>
                            <li>Note: jika orang tua memperoleh Kewarganegaraan RI melalui naturalisasi, wajib melampirkan dokumen Perwarganegaraan Indonesia. <br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Alur Proses Pengembalian Dokumen Keimigrasian</span></h2>
                          <ul>
                            <li>Penyerahan dokumen persyaratan ke Kantor Imigrasi; <br><br></li>
                            <li>Entri data pada Sistem Keimigrasian; <br><br></li>
                            <li>Proses persetujaun permohonan oleh pejabat yang berwenang; <br><br></li>
                            <li>Penyerahan dokumen (2 hari kerja setelah penyerahan dokumen persyaratan). <br><br></li>
                          </ul>

                          <div><br></div>
                          <h2><span style="font-weight: normal;">Tarif PNBP</span></h2>
                          <ul>
                            <li>Anak Berkewarganegaraan GandaPendaftaran Anak Berkewarganegaraan Ganda Terbatas	Rp 0,- <br><br></li>
                            <li>Fasilitas Keimigrasian	Rp 400.000,- <br><br></li>
                            <li>Penelaah Status Keimigrasian <br><br></li>
                            <li>Surat Keterangan Keimigrasian (SKIM)	Rp 3.000.000,- <br><br></li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card bg-info pb-2">
                <div class="card-body">
                  <h4 class="card-title text-white text-center bi bi-people" style="font-size: 30px;">Warga Negara Asing</h2>
                  <div class="col-lg-12">
                    <div class="card card-body" style="min-height:390px;">
                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse9" role="button" aria-expanded="false" aria-controls="collapse9">Tentang Izin Tinggal Kunjungan</a>
                      <div class="collapse" id="collapse9">
                        <div class="card card-body">
                          <p><span style="font-weight: bold;">Tentang Izin Tinggal Kunjungan</span></p>
                          <ul>
                            <li>Pemohon mendaftarkan permohonan secara online melalui Website  izintinggal.imigrasi.go.id, atau datang langsung (walk in) ke kantor imigrasi <br><br></li>
                            <li>Pemohon menyerahkan lampiran email konfirmasi (bagi permohonan secara online) dan berkas persyaratan kepada petugas Customer care, selanjutnya pemohon diberikan formulir (perdim) sesuai dengan permohonan untuk diisi; <br></li>
                            <li>Petugas melakukan pemeriksaan kelengkapan persyaratan, entry data, pemindaian berkas dan cetak tanda terima permohonan (bukti pengantar pembayaran) <br><br></li>
                            <li>Pemohon melakukan pembayaran biaya Imigrasi sesuai ketentuan peraturan Perundang-Undangan; <br></li>
                            <li>Petugas melakukan pengawasan Keimigrasian lapangan, jika diperlukan sesuai dengan pertimbangan Kepala Kantor Imigrasi atau Pejabat Imigrasi yang ditunjuk; <br><br></li>
                            <li>Persetujuan Kepala Kantor Imigrasi atau Pejabat Imigarsi yang ditunjuk; <br><br></li>
                            <li>Petugas melakukan wawancara, identifikasi dan verifikasi data serta pengambilan data biometrik foto dan sidik jari (hanya untuk perpanjangan pertama); <br><br></li>
                            <li>Petugas melakukan peneraan cap perpanjangan Izin Tinggal Kunjungan pada Paspor Kebangsaan dan ditandatangani oleh Kepala Kantor Imigrasi atau Pejabat Imigrasi yang ditunjuk; <br><br></li>
                            <li>Petugas melakukan Pemindaian dokumen selesai; <br><br></li>
                            <li>Penyerahan dokumen. <br><br></li>
                          </ul>
                          <p><span style="font-weight: bold;">Biaya</span></p>
                          <div>Perpanjangan Izin Kunjungan dan Izin Kunjungan Saat Kedatangan Per Orang :Rp. 500.000 <br> <br></div>

                          <p><span style="font-weight: bold;">Persyaratan Utama</span></p>
                          <ul>
                            <li>Surat penjaminan dari Penjamin pada saat mengajukan permohonan visa, kecuali bagi permohonan terhadap anak yang lahir di wilayah Indonesia; <br><br></li>
                            <li>Paspor Kebangsaan atau Dokumen Perjalanan yang sah dan masih berlaku; <br><br></li>
                            <li>Tiket untuk kembali ke negara asal atau meneruskan ke negara lain; <br><br></li>
                            <li>Surat kuasa bermaterai cukup dalam hal pengurusan melalui kuasa. <br><br></li>
                          </ul>

                          <p><span style="font-weight: bold;">Persyaratan Tambahan</span></p>
                          <div>Permohonan perpanjangan izin tinggal kunjungan diajukan paling cepat 14 (empat belas) hari dan paling lambat pada hari kerja sebelum jangka waktu izin tinggal kunjungan berakhir. <br><br>Izin Tinggal Kunjungan Saat Kedatangan hanya dapat diperpanjang 1 kali sedangkan Izin Tinggal Kunjungan Bebas Visa tidak dapat diperpanjang</div>
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse10" role="button" aria-expanded="false" aria-controls="collapse10">Izin Tinggal Terbatas</a>
                      <div class="collapse" id="collapse10">
                        <div class="card card-body">
                          <h3><span style="font-weight:bold; font-size:30px;"></span>Izin Tinggal Terbatas <br><br></h3>
                          <p><span style="font-weight: bold;">Prosedur Permohonan Kartu Izin Tinggal Terbatas (KITAS) :</span></p>
                          <ul>
                            <li>Pemohon mendaftarkan permohonan secara online melalui Website  izintinggal.imigrasi.go.id, atau datang langsung (walk in) ke kantor imigrasi <br><br></li>
                            <li>Pemohon menyerahkan lampiran email konfirmasi (bagi permohonan secara online) dan berkas persyaratan kepada petugas Customer care, selanjutnya pemohon diberikan formulir (perdim) sesuai dengan permohonan untuk diisi; <br><br></li>
                            <li>Petugas melakukan pemeriksaan kelengkapan persyaratan, verifikasi data, entry data dan cetak tanda terima permohonan (bukti pengantar pembayaran); <br><br></li>
                            <li>Pemohon melakukan pembayaran biaya Imigrasi sesuai ketentuan peraturan Perundang-Undangan; <br><br></li>
                            <li>Petugas melakukan wawancara, dan pengambilan data biometrik foto dan sidik jari; <br><br></li>
                            <li>Petugas melakukan peneraan cap telah diberikan Izin Tinggal Terbatas sekaligus memuat Izin Masuk Kembali pada Paspor Kebangsaan; <br><br></li>
                            <li>Petugas melakukan Pemindaian halaman teraan Izin Tinggal Terbatas pada Paspor Kebangsaan ; <br><br></li>
                            <li>Petugas melakukan penyerahan Paspor Kebangsaan yang telah selesai diproses <br><br></li>
                            <li>Pemohon mencetak secara mandiri Izin Tinggal Terbatas Elektronik yang dikirim secara otomatis oleh aplikasi kesisteman. <br><br></li>
                          </ul>

                          <p><span style="font-weight: bold;">Biaya Permohonan Izin Tinggal Terbatas (KITAS) :</span></p>
                          <ul>
                            <li>Izin Tinggal Terbatas masa berlaku 6 bulan : Rp. 1.000.000 <br><br></li>
                            <li>Izin Tinggal Terbatas masa berlaku 1 tahun : Rp. 1.500.000 <br><br></li>
                            <li>Izin Tinggal Terbatas masa berlaku 2 tahun : Rp. 2.000.000 <br><br></li>
                            <li>Izin Masuk Kembali (Multiple re-entry permit) masa berlaku 6 bulan: Rp. 600.000 <br><br></li>
                            <li>Izin Masuk Kembali (Multiple re-entry permit) masa berlaku 1 Tahun: Rp. 1.000.000 <br><br></li>
                            <li>Izin Masuk Kembali (Multiple re-entry permit) masa berlaku 2 Tahun: Rp. 1.750.000 <br><br></li>
                          </ul>

                          <h3><span style="font-weight:bold; font-size:30px;"></span>Izin Tinggal Baru <br><br></h3>
                          <ul>
                            <li>Paspor Kebangsaan yang sah dan masih berlaku dan memuat Tanda Masuk; <br><br></li>
                            <li>Surat penjaminan dari Penjamin; <br><br></li>
                            <li>Surat kuasa bermaterai cukup dalam hal pengurusan melalui kuasa. <br><br></li>
                          </ul>
                          <p><span style="font-weight: bold;">Persyaratan Tambahan :</span></p>
                          <ol>
                            <li>Bagi Orang Asing sebagai penanaman modal, permohonan diajukan oleh Penjamin dengan melampirkan:</li>
                            <ul>
                              <li>akte pendirian perusahaan yang memuat kepemilikan modal dan / atau saham dari Orang Asing yang ditanam di Indonesia; <br><br></li>
                              <li>surat persetujuan penanaman modal dari lembaga negara yang membidangi penanaman modal; <br><br></li>
                              <li>izin usaha tetap; <br><br></li>
                              <li>surat izin usaha perdagangan; <br><br></li>
                              <li>tanda daftar perusahaan; <br><br></li>
                              <li>nomor pokok wajib pajak perusahaan. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang bekerja sebagai tenaga ahli, permohonan diajukan oleh Penjamin dengan melampirkan:</li>
                            <ul>
                              <li>rekomendasi rencana penggunaan tenaga kerja asing yang masih berlaku dan izin mempekerjakan tenaga kerja asing dari Kementerian  yang membidangi ketenagakerjaan; <br><br></li>
                              <li>izin usaha tetap; <br><br></li>
                              <li>surat izin usaha perdagangan; <br><br></li>
                              <li>tanda daftar perusahaan ; <br><br></li>
                              <li>nomor pokok wajib pajak perusahaan; <br><br></li>
                              <li>akta pendirian perusahaan. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang bekerja sebagai tenaga ahli diatas kapal laut, alat angkut alat apung atau instalasi yang beroperasi diperairan nusantara, laut teritorial, landas kontinen, dan/atau Zona Ekonomi Eksklusif Indonesia, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>rekomendasi rencana penggunaan tenaga kerja asing yang masih berlaku dan izin mempekerjakan tenaga kerja asing dari Kementerian  yang membidangi ketenagakerjaan; <br><br></li>
                              <li>rekomendasi dari kementerian atau instansi terkait; <br><br></li>
                              <li>izin usaha tetap; <br><br></li>
                              <li>surat izin usaha perdagangan; <br><br></li>
                              <li>tanda daftar perusahaan; <br><br></li>
                              <li>nomor pokok wajib pajak perusahaan; <br><br></li>
                              <li>akta pendirian perusahaan. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang melaksanakan tugas sebagai rohaniawan, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>rekomendasi dari kementerian yang membidangi keagamaan; <br><br></li>
                              <li>rekomendasi rencana penggunaan tenaga kerja asing yang masih berlaku dan izin mempekerjakan tenaga kerja asing dari Kementerian  yang membidangi ketenagakerjaan; <br><br></li>
                              <li>akta pendirian yayasan atau lembaga kerohanian. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang mengikuti pendidikan dan pelatihan, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>surat rekomendasi dari Kementerian  yang membidangi pendidikan atau keagamaan atau lembaga pemerintah yang terkait sesuai dengan bidang kegiatannya; <br><br></li>
                              <li>surat rekomendasi dari Sekretariat Negara bagi Orang Asing penerima beasiswa dari pemerintah Republik Indonesia. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang mengadakan penelitian ilmiah, permohonan diajukan oleh Penjamin dengan melampirkan juga rekomendasi dari kementerian atau lembaga pemerintah yang membidangi penelitian atau lembaga pemerintah terkait sesuai dengan bidang kegiatannya. <br><br></li>
                            <li>Bagi Orang Asing yang melakukan perkawinan campuran dan menggabungkan diri dengan suami atau istri warga negara Indonesia, permohonan diajukan oleh suami atau istri Orang Asing yang bersangkutan sebagai Penanggung jawab dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta perkawinan atau buku nikah yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>surat bukti lapor perkawinan dari kantor pencatatan sipil, dalam hal perkawinan dilangsungkan diluar negeri; <br><br></li>
                              <li>rencana penggunaan tenaga kerja asing dari Kementerian yang membidangi ketenagakerjaan, dalam hal orang asing yang bersangkutan sebagai tenaga kerja asing. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang menggabungkan diri dengan suami atau istri pemegang Izin Tinggal Terbatas, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta perkawinan atau buku nikah yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>kartu Izin Tinggal Terbatas atau kartu Izin Tinggal Tetap suami atau istri. <br><br></li>
                            </ul>
                            <li>Bagi anak berkewarganegaraan asing yang menggabungkan diri dengan orang tua yang mempunyai hubungan hukum kekeluargaan dengan orang tua warga Negara Indonesia, permohonan diajukan oleh ayah dan/atau ibunya warga negara Indonesia sebagai Penanggung jawab dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta kelahiran yang bersangkutan yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>akta perkawinan orang tua yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>surat bukti lapor perkawinan dari kantor pencatatan sipil, dalam hal perkawinan dilangsungkan diluar negeri. <br><br></li>
                            </ul>
                            <li>Bagi anak yang belum berusia 18 (delapan belas) tahun dan belum kawin yang menggabungkan diri dengan orang tua pemegang Izin Tinggal Terbatas, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta kelahiran yang bersangkutan yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>akta perkawinan orang tua yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah kecuali bahasa Inggris; <br><br></li>
                              <li>kartu Izin Tinggal Terbatas atau kartu Izin Tinggal Tetap aya h dan/atau ibunya. <br><br></li>
                            </ul>
                            <li>Bagi eks warga negara Indonesia dalam rangka memperoleh kembali Kewarganegaraan Republik Indonesia berdasarkan ketentuan peraturan perundang – undangan, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>bukti keterangan dari Kepala Perwakilan Republik Indonesia tentang kehilangan kewarganegaraan Indonesia; <br><br></li>
                              <li>bukti berupa dokumen resmi yang dikeluarkan oleh instansi pemerintah Republik Indonesia atau lembaga yang diakui oleh pemerintah Republik Indonesia yang sah yang dapat membuktikan bahwa yang bersangkutan adalah eks warga negara Indonesia antara lain akta kelahiran, kartu tanda penduduk, Paspor Republik Indonesia atau Ijazah. <br><br></li>
                            </ul>
                            <li>Bagi eks warga negara Indonesia bukan dalam rangka memperoleh kembali kewarganegaraan Indonesia, permohonan diajukan oleh Penjamin dengan melampirkan juga dokumen resmi yang dikeluarkan oleh Instansi pemerintah Republik Indonesia atau oleh lembaga yang diakui oleh pemerintah Republik Indonesia yang sah yang dapat membuktikan bahwa yang bersangkutan adalah eks warga negara Indonesia antara lain akta kelahira, kartu tanda penduduk, Paspor Republik Indonesia atau Ijazah. <br><br></li>
                            <li>Bagi eks anak berkewarganegaraan ganda Republik Indonesia , permohonan diajukan oleh ayah dan/atau ibunya warga negara Indonesia atau Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta kelahiran yang bersangkutan yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>akta perkawinan orang tua yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>bukti fasilitas Keimigrasian berupa kartu fasilitas Keimigrasian atau pengembalian Dokumen Keimigrasian. <br><br></li>
                            </ul>
                            <li>Bagi wisatawan lanjut usia mancanegara, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>surat izin usaha perdagangan biro perjalanan wisata yang ditunjuk oleh kementerian yang menyelenggarakan urusan pemerintahan dibidang kepariwisataan. <br><br></li>
                              <li>bukti mengenai tersedianya dana untuk memenuhi kebutuhan hidupnya selama di Indonesia dari lembaga dana pensiun atau bank di negara asalnya ataupun di wilayah Indonesia; <br><br></li>
                              <li>bukti polis asuransi kesehatan, asuransi kematian; <br><br></li>
                              <li>bukti tinggal disarana akomodasi yang tersedia selama di Indonesia baik yang diperoleh dengan cara sewa, sewa beli, atau pembelian; <br><br></li>
                              <li>bukti telah memperkerjakan tenaga informal warga negara Indonesia sebagai pramuwisma, supir, penjaga keamanan, atau tukang kebun <br><br></li>
                            </ul>
                            <li>Bagi anak dari Orang Asing yang kawin secara sah dengan warga negara Indonesia yang belum berusia 18 (delapan belas) tahun dan belum kawin dan menggabungkan dengan ayah atau ibu warga negara Indonesia, permohonan diajukan oleh ayah atau ibunya warga negara Indonesia sebagai Penanggung jawab dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta kelahiran yang bersangkutan yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>akta perkawinan orang tua yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>surat bukti lapor perkawinan dari kantor pencatatan sipil, dalam hal perkawinan dilangsungkan diluar negeri. <br><br></li>
                            </ul>
                            <li>Bagi orang asing yang bekerja pada instansi pemerintah, badan internasional, atau perwakilan negara asing, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>rekomendasi dari Kementerian  Sekretariat Negara; <br><br></li>
                              <li>rekomendasi dari kementerian terkait atau lembaga pemerintah terkait. <br><br></li>
                            </ul>
                            <li>Bagi orang asing yang bekerja sebagai tenaga ahli dalam rangka kerja sama teknik pemerintah Republik Indonesia dan pemerintah asing, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>surat rekomendasi dari Kementerian  Sekretariat Negara; <br><br></li>
                              <li>rekomendasi dari kementerian atau lembaga pemerintah terkait. <br><br></li>
                            </ul>
                            <li>Bagi anak yang lahir diwilayah Indonesia yang mengikuti status Izin Tinggal orang tuanya pemegang Izin Tinggal Terbatas, permohonan diajukan ayah dan/atau ibunya dengan melampirkan: <br><br></li>
                            <ul>
                              <li>surat keterangan kelahiran anak dari rumah sakit atau akta kelahiran dari pejabat yang berwenang; <br><br></li>
                              <li>Paspor Kebangsaan ayah dan/atau ibunya; <br><br></li>
                              <li>kartu Izin Tinggal Terbatas ayah dan/atau ibunya; <br><br></li>
                              <li>surat kawin orang tua bagi yang menikah; <br><br></li>
                            </ul>
                            <li>surat keterangan lapor lahir yang dikeluarkan oleh kantor Imigrasi.</li>
                          </ol>
                          <h3><span style="font-weight:bold; font-size:30px;"></span>Pemberian Izin Tinggal Terbatas yang berasal dari alih status Izin Tinggal Kunjungan<br><br></h3>
                          <ul>
                            <li>Surat keterangan domisili; <br><br></li>
                            <li>Paspor Kebangsaan yang sah dan masih berlaku dan memuat visa dan tanda masuk, kecuali bagi anak pemegang Izin Tinggal Kunjungan yang diberikan karena lahir di wilayah Indonesia dari ayah dan/atau ibunya pemegang Izin Tinggal Kunjungan; <br><br></li>
                            <li>Surat penjaminan dari Penjamin; <br><br></li>
                            <li>Kartu tanda penduduk dan kartu keluarga Penjamin atau Penanggung jawab; <br><br></li>
                            <li>Kartu Izin Tinggal Terbatas atau kartu Izin Tinggal Tetap, dalam hal Penjamin atau Penanggung jawab berkebangsaan asing; <br><br></li>
                            <li>Surat kuasa bermaterai cukup dalam hal pengurusan melalui kuasa. <br><br></li>
                          </ul>
                          <p><span style="font-weight: bold;">Persyaratan Tambahan :</span></p>
                          <ol>
                            <li>Bagi Orang Asing sebagai penanaman modal, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akte pendirian perusahaan yang memuat kepemilikan modal dan / atau saham dari Orang Asing yang ditanam di Indonesia; <br><br></li>
                              <li>surat persetujuan penanaman modal dari lembaga negara yang membidangi penanaman modal; <br><br></li>
                              <li>izin usaha tetap; <br><br></li>
                              <li>surat izin usaha perdagangan; <br><br></li>
                              <li>tanda daftar perusahaan; <br><br></li>
                              <li>nomor pokok wajib pajak perusahaan. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang bekerja sebagai tenaga ahli, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>rekomendasi rencana penggunaan tenaga kerja asing yang masih berlaku dan izin mempekerjakan tenaga kerja asing dari Kementerian  yang membidangi ketenagakerjaan; <br><br></li>
                              <li>izin usaha tetap; <br><br></li>
                              <li>surat izin usaha perdagangan; <br><br></li>
                              <li>tanda daftar perusahaan ; <br><br></li>
                              <li>nomor pokok wajib pajak perusahaan; <br><br></li>
                              <li>akta pendirian perusahaan. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang bekerja sebagai tenaga ahli diatas kapal laut, alat angkut alat apung atau instalasi yang beroperasi diperairan nusantara, laut teritorial, landas kontinen, dan/atau Zona Ekonomi Eksklusif Indonesia, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>rekomendasi rencana penggunaan tenaga kerja asing yang masih berlaku dan izin mempekerjakan tenaga kerja asing dari kementerian yang membidangi ketenagakerjaan; <br><br></li>
                              <li>rekomendasi dari kementerian atau instansi terkait; <br><br></li>
                              <li>izin usaha tetap; <br><br></li>
                              <li>surat izin usaha perdagangan; <br><br></li>
                              <li>tanda daftar perusahaan; <br><br></li>
                              <li> nomor pokok wajib pajak perusahaan; <br><br></li>
                              <li>akta pendirian perusahaan. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang melaksanakan tugas sebagai rohaniawan, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>rekomendasi dari kementerian yang membidangi keagamaan; <br><br></li>
                              <li>rekomendasi rencana penggunaan tenaga kerja asing yang masih berlaku dan izin mempekerjakan tenaga kerja asing dari Kementerian  yang membidangi ketenagakerjaan; <br><br></li>
                              <li>akta pendirian yayasan atau lembaga kerohanian. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang mengikuti pendidikan dan pelatihan, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>surat rekomendasi dari Kementerian  yang membidangi pendidikan atau keagamaan atau lembaga pemerintah yang terkait sesuai dengan bidang kegiatannya; <br><br></li>
                              <li>surat rekomendasi dari Sekretariat Negara bagi Orang Asing penerima beasiswa dari pemerintah Republik Indonesia. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang mengadakan penelitian ilmiah, permohonan diajukan oleh Penjamin dengan melampirkan juga rekomendasi dari kementerian atau lembaga pemerintah yang membidangi penelitian atau lembaga pemerintah terkait sesuai dengan bidang kegiatannya. <br><br></li>
                            <li>Bagi Orang Asing yang melakukan perkawinan campuran dan menggabungkan diri dengan suami atau istri warga negara Indonesia, permohonan diajukan oleh suami atau istri Orang Asing yang bersangkutan sebagai Penanggung jawab dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta perkawinan atau buku nikah yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>surat bukti lapor perkawinan dari kantor pencatatan sipil, dalam hal perkawinan dilangsungkan diluar negeri; <br><br></li>
                              <li>rencana penggunaan tenaga kerja asing dari Kementerian yang membidangi ketenagakerjaan, dalam hal orang asing yang bersangkutan sebagai tenaga kerja asing. <br><br></li>
                            </ul>
                            <li>Bagi Orang Asing yang menggabungkan diri dengan suami atau istri pemegang Izin Tinggal Terbatas, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta perkawinan atau buku nikah yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>kartu Izin Tinggal Terbatas atau kartu Izin Tinggal Tetap suami atau istri. <br><br></li>
                            </ul>
                            <li>Bagi anak berkewarganegaraan asing yang menggabungkan diri dengan orang tua yang mempunyai hubungan hukum kekeluargaan dengan orang tua warga Negara Indonesia, permohonan diajukan oleh ayah dan/atau ibunya warga negara Indonesia sebagai Penanggung jawab dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta kelahiran yang bersangkutan yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>akta perkawinan orang tua yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>surat bukti lapor perkawinan dari kantor pencatatan sipil, dalam hal perkawinan dilangsungkan diluar negeri. <br><br></li>
                            </ul>
                            <li>Bagi anak yang belum berusia 18 (delapan belas) tahun dan belum kawin yang menggabungkan diri dengan orang tua pemegang Izin Tinggal Terbatas, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta kelahiran yang bersangkutan yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>akta perkawinan orang tua yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah kecuali bahasa Inggris; <br><br></li>
                              <li>kartu Izin Tinggal Terbatas atau kartu Izin Tinggal Tetap ayah dan/atau ibunya <br><br></li>
                            </ul>
                            <li>Bagi eks warga negara Indonesia dalam rangka memperoleh kembali Kewarganegaraan Republik Indonesia berdasarkan ketentuan peraturan perundang – undangan, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>bukti keterangan dari Kepala Perwakilan Republik Indonesia tentang kehilangan kewarganegaraan Indonesia; <br><br></li>
                              <li>bukti berupa dokumen resmi yang dikeluarkan oleh instansi pemerintah Republik Indonesia atau lembaga yang diakui oleh pemerintah Republik Indonesia yang sah yang dapat membuktikan bahwa yang bersangkutan adalah eks warga negara Indonesia antara lain akta kelahiran, kartu tanda penduduk, Paspor Republik Indonesia atau Ijazah. <br><br></li>
                            </ul>
                            <li>Bagi eks warga negara Indonesia bukan dalam rangka memperoleh kembali kewarganegaraan Indonesia, permohonan diajukan oleh Penjamin dengan melampirkan juga dokumen resmi yang dikeluarkan oleh Instansi pemerintah Republik Indonesia atau oleh lembaga yang diakui oleh pemerintah Republik Indonesia yang sah yang dapat membuktikan bahwa yang bersangkutan adalah eks warga negara Indonesia antara lain akta kelahira, kartu tanda penduduk, Paspor Republik Indonesia atau Ijazah. <br><br></li>
                            <li>Bagi eks anak berkewarganegaraan ganda Republik Indonesia , permohonan diajukan oleh ayah dan/atau ibunya warga negara Indonesia atau Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta kelahiran yang bersangkutan yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>akta perkawinan orang tua yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>bukti fasilitas Keimigrasian berupa kartu fasilitas Keimigrasian atau pengembalian Dokumen Keimigrasian. <br><br></li>
                            </ul>
                            <li>Bagi wisatawan lanjut usia mancanegara, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>surat izin usaha perdagangan biro perjalanan wisata yang ditunjuk oleh kementerian yang menyelenggarakan urusan pemerintahan dibidang kepariwisataan. <br><br></li>
                              <li>bukti mengenai tersedianya dana untuk memenuhi kebutuhan hidupnya selama di Indonesia dari lembaga dana pensiun atau bank di negara asalnya ataupun di wilayah Indonesia; <br><br></li>
                              <li>bukti polis asuransi kesehatan, asuransi kematian; <br><br></li>
                              <li>bukti tinggal disarana akomodasi yang tersedia selama di Indonesia baik yang diperoleh dengan cara sewa, sewa beli, atau pembelian; <br><br></li>
                              <li>bukti telah memperkerjakan tenaga informal warga negara Indonesia sebagai pramuwisma, supir, penjaga keamanan, atau tukang kebun <br><br></li>
                            </ul>
                            <li>Bagi anak dari Orang Asing yang kawin secara sah dengan warga negara Indonesia yang belum berusia 18 (delapan belas) tahun dan belum kawin dan menggabungkan dengan ayah atau ibu warga negara Indonesia, permohonan diajukan oleh ayah atau ibunya warga negara Indonesia sebagai Penanggung jawab dengan melampirkan: <br><br></li>
                            <ul>
                              <li>akta kelahiran yang bersangkutan yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>akta perkawinan orang tua yang telah diterjemahkan dalam bahasa Indonesia oleh penerjemah tersumpah, kecuali bahasa Inggris; <br><br></li>
                              <li>surat bukti lapor perkawinan dari kantor pencatatan sipil, dalam hal perkawinan dilangsungkan diluar negeri. <br><br></li>
                            </ul>
                            <li>Bagi orang asing yang bekerja pada instansi pemerintah, badan internasional, atau perwakilan negara asing, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>rekomendasi dari Kementerian  Sekretariat Negara; <br><br></li>
                              <li>rekomendasi dari kementerian terkait atau lembaga pemerintah terkait <br><br></li>
                            </ul>
                            <li>Bagi orang asing yang bekerja sebagai tenaga ahli dalam rangka kerja sama teknik pemerintah Republik Indonesia dan pemerintah asing, permohonan diajukan oleh Penjamin dengan melampirkan: <br><br></li>
                            <ul>
                              <li>surat rekomendasi dari Kementerian  Sekretariat Negara; <br><br></li>
                              <li>rekomendasi dari kementerian atau lembaga pemerintah terkait. <br><br><li>
                            </ul>
                            <li>Bagi anak yang lahir diwilayah Indonesia yang mengikuti status Izin Tinggal orang tuanya pemegang Izin Tinggal Terbatas, permohonan diajukan ayah dan/atau ibunya dengan melampirkan: <br><br></li>
                            <ul>
                              <li>surat keterangan kelahiran anak dari rumah sakit atau akta kelahiran dari pejabat yang berwenang; <br><br></li>
                              <li>Paspor Kebangsaan ayah dan/atau ibunya; <br><br></li>
                              <li>kartu Izin Tinggal Terbatas ayah dan/atau ibunya; <br><br></li>
                              <li>surat kawin orang tua bagi yang menikah; <br><br></li>
                              <li>surat keterangan lapor lahir yang dikeluarkan oleh kantor Imigrasi. <br><br></li>
                            </ul>
                          </ol>
                          <p><span style="font-weight: bold;">Perpanjangan Izin Tinggal Terbatas</span></p>
                          <ol>
                            <li>Ketentuan mengenai persyaratan sebagaimana tercantum pada pemberian Izin Tinggal Terbatas maupun pemberian Izin Tinggal Terbatas yang berasal dari alih status Izin Tinggal Kunjungan, berlaku juga bagi perpanjangan Izin Tinggal terbatas; <br><br></li>
                            <li>Selain memenuhi persyaratan sebagaimana dimaksud dalam point 1, juga harus melampirkan : <br><br></li>
                            <ul>
                              <li>Kartu Izin Tinggal Terbatas; <br><br></li>
                              <li>Surat Keterangan Tempat Tinggal (SKTT); <br><br></li>
                            </ul>
                          </ol>
                          <p><span style="font-weight: bold;">Persyaratan  Tambahan :</span></p>
                          <ol>
                            <li>Permohonan perpanjangan izin tinggal terbatas dapat diajukan paling cepat 3 (tiga) bulan dan paling lambat pada hari kerja sebelum izin tinggal terbatasnya berakhir <br><br></li>
                            <li>Keseluruhan izin tinggal terbatas tidak melebihi 6 (enam) tahun. <br><br></li>
                          </ol>
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse11" role="button" aria-expanded="false" aria-controls="collapse11">Izin Tinggal Tetap</a>
                      <div class="collapse" id="collapse11">
                        <div class="card card-body">
                          <h3><span style="font-weight:bold; font-size:30px;"></span>Izin Tinggal Tetap<br><br></h3>
                          <div>Izin Tinggal Tetap yang diberikan kepada orang asing pemegang Visa Tinggal Terbatas yang telah tinggal di Indonesia sekurang-kurangnya lima tahun berturut-turut terhitung sejak tanggal diberikannya Izin Tinggal Terbatas. Jadi, Izin Tinggal Tetap diperoleh sebagai alih status dari izin Tinggal Terbatas.   Pengalihan Alih Status tersebut dapat diberikan atas dasar permohonan orang asing yang bersangkutan. <br><br>Izin Tinggal Tetap diberikan oleh Direktur Jenderal Imigrasi atas nama Menteri Hukum dan HAM. Permohonan diajukan melalui Kepala Kantor Imigrasi, dengan mengisi formulir dan melampirkan dokumen-dokumen sebagai berikut: <br><br></div>
                          <ul>
                            <li>Surat permintaan dari pemohon Izin Tinggal Tetap; <br><br></li>
                            <li>Pasfoto; <br><br></li>
                            <li>Surat sponsor dan identitas sponsor serta mengisi formulir; <br><br></li>
                            <li>Foto copy dan asli paspor atau dokumen perjalanan, Buku Pengendalian Orang Asing dan Kartu izin Tinggal Terbatas orang asing yang bersangkutan yang sah dan masih berlaku. <br> <br></li>
                          </ul>
                          <div>Pemberian izin Tinggal Tetap diberikan oleh Kepala Kantor Imigrasi kepada orang asing yang bertempat tinggal di wilayah kerja Kantor Imigrasi tersebut dan izin Tinggal tetap hanya diberikan kepada orang asing pemegang paspor kebangsaan, untuk jangka waktu paling lama 5 (lima) tahun dan dapat diperpanjang. <br><br>Permohonan perpanjangan izin Tinggal Tetap diajukan paling lambat 60 (enam puluh) hari sebelum izin Tinggal Tetap berakhir. <br><br>Dalam hal izin Tinggal Tetap berakhir, sedangkan Keputusan Direktur Jenderal Imigrasi mengenai permohonan perpanjangan izin Tinggal tetap belum diberikan, Kepala Kantor Imigrasi yang bersangkutan memberikan perpanjangan sementara paling lama 90 (sembilan puluh) hari, terhitung sejak izin Tinggal Tetap berakhir. <br><br> Dasar hukum: <br><br></div>
                          <ul>
                            <li>Peraturan Pemerintah No. 32 Tahun 1994 tentang Visa, Izin Masuk, dan Izin Keimigrasian <br><br></li>
                            <li>Peraturan Pemerintah No. 18 Tahun 2005 tentang Perubahan Atas Peraturan Pemerintah No. 32 Tahun 1994 tentang Visa, Izin Masuk, dan Izin Keimigrasian <br><br></li>
                            <li>Keputusan Menteri Kehakiman Nomor M.02-IZ.01.10 Tahun 1995 tentang Visa Singgah, Visa Kunjungan, Visa Tinggal Terbatas, Izin Masuk, dan Izin Keimigrasian <br><br></li>
                          </ul>
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse12" role="button" aria-expanded="false" aria-controls="collapse12">Alih Status Izin Kunjungan ke Izin Tinggal Terbatas</a>
                      <div class="collapse" id="collapse12">
                        <div class="card card-body">
                          <h3><span style="font-weight:bold; font-size:30px;"></span>Alih Status Izin Kunjungan ke Izin Tinggal Terbatas<br><br></h3>
                          <p><span style="font-weight: bold;">Persyaratan</span></p>
                          <div><br></div>
                          <ol>
                            <li>Paspor kebangsaan yang sah dan masih berlaku <br><br></li>
                            <li>Visa/izin tinggal yang masih berlaku <br><br></li>
                            <li>Surat permohonan dari sponsor <br><br></li>
                            <li>Surat pernyataan dan jaminan bermaterai <br><br></li>
                            <li>Untuk alih status karena perkawinan/penyatuan keluarga melampirkan :</li>
                            <ul>
                              <li>Akte perkawinan/surat nikah yang disahkan oleh pejabat yang berwenang <br><br></li>
                              <li>Surat keterangan lapor/pencatatan perkawinan dari instansi yang berwenang apabila pernikahan dilangsungkan diluar negeri <br><br></li>
                              <li>KTP & KK suami atau isteri WNI <br><br></li>
                            </ul>
                            <li>Untuk alih status karena tenaga kerja asing melampirkan : <br><br></li>
                            <ul>
                              <li>Izin mempergunakan tenaga kerja asing <br><br></li>
                              <li>Akta pendirian perusahaan <br><br></li>
                              <li>Tanda daftar perusahaan <br><br></li>
                            </ul>
                            <li>Untuk Rohaniawan melampirkan rekomendasi dari kementerian agama <br><br></li>
                            <li>Untuk Pelajar/Mahasiswa yang mengikuti pendidikan melampirkan : <br><br></li>
                            <ul>
                              <li>Rekomendasi dari Kemendiknas untuk mahasiswa yang belajar di perguruan swasta <br><br></li>
                              <li>Rekomendasi Kepala Sekolah Negeri/Rektor PTN bagi mahasiswa yang mengikuti pendidikan di sekolah negeri/PTN di Indonesia. <br><br></li>
                            </ul>
                          </ol>
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse13" role="button" aria-expanded="false" aria-controls="collapse13">Surat Keterangan Keimigrasian</a>
                      <div class="collapse" id="collapse13">
                        <div class="card card-body">
                          <h3><span style="font-weight:bold; font-size:30px;"></span>Surat Keterangan Keimigrasian<br><br></h3>
                          <div>Surat Keterangan Keimigrasian (SKIM) yang selanjutnya disebut SKIM adalah dokumen keimigrasian yang memuat keterangan mengenai masa tinggal warga Negara asing di wilayah Republik Indonesia selama 5 (lima) tahun berturut-turut atau 10 (sepuluh) tahun tidak berturut-turut sebagai salah satu persyaratan permohonan Kewarganegaraan Republik Indonesia baik melalui proses pewarganegaraan maupun menyampaikan pernyataan menjadi warga Negara Indonesia. <br><br></div>
                          <p><span style="font-weight: bold;">Prosedur Permohonan Surat Keterangan Keimigrasian (SKIM) adalah sebagai berikut :</span></p>
                          <div><br></div>
                          <ol>
                            <li>Petugas loket menerima berkas dari pemohon, memeriksa kelengkapan permohonan  dan memasukan berkas ke dalam  komputer termasuk pemindaian dokumendan penyerahan Paspor. <br><br></li>
                            <li>Petugas loket menyerahkan berkas yang sudah diverifikasi ke Seksi Waskadim untuk dilakukan pengecekan terhadap Daftar Cegah dan penelitian dokumen yang diterima. <br><br></li>
                            <li>Bagian Seksi Statuskim memproses permohonan yang sudah diverifikasi oleh Seksi Waskadim dan melanjutkan untuk dibuatkan permohonan lanjutan kepada Kanwil atau Ditjen Imigrasi untuk mendapatkan persetujuan permohonan SKIM tersebut. <br><br></li>
                            <li>Kanwil atau Ditjen Imigrasi akan menyerahkan dokumen yang telah disetujui kepada Kantor Imigrasi permohon kembali untuk dilakukan pembayaran. <br><br></li>
                            <li>Bendahara Penerima menerima pembayaran terhadap permohonan yang diajukan dan mengeluarkan Tanda Terima Pembayaran. <br><br></li>
                            <li>Berkas yang sudah dilakukan pembayaran dikirimkan ke Petugas Foto & Sidik Jari (5.a) untuk dilakukan pengambilan identifikasi : Foto Wajah, Sidik jari & Tanda Tangan pemohon dan menyerahkan dokumen yang sudah lengkap kepada Kepala Kantor (5.b) untuk ditandatangani. <br><br></li>
                            <li>Permohonan yang sudah ditandatangani oleh Kepala Kantor untuk dilanjutkan ke bagian Loket Penerima (6) untuk diserahkan kepada pemohon dan ke bagian Seksi Infokim (6.a) untuk dilakukan pengarsipan dan pemindaian dokumen. <br><br></li>
                            <li>Petugas Loket penyerahkan berkas permohonan yang sudah disetujui. <br><br></li>
                          </ol>
                        </div>
                      </div>

                      <a class="btn btn-success mt-2" data-bs-toggle="collapse" href="#collapse14" role="button" aria-expanded="false" aria-controls="collapse14">Biaya Layanan Keimigrasian WNA</a>
                      <div class="collapse" id="collapse14">
                        <div class="card card-body">
                          <ol>
                            <li>Perpanjangan Izin Tinggal Kunjungan	per-dokumen	Rp 500.000,- <br><br></li>
                            <li>Izin Tinggal Terbatas ( Baru / Perpanjangan ) 6 Bulan	per-dokumen	Rp 1.000,000.00 <br><br></li>
                            <li>Izin Tinggal Terbatas ( Baru / Perpanjangan ) 1 Tahun	per-dokumen	Rp 1,500,000.00 <br><br></li>
                            <li>Multiple Exit Re-Entry Permit (MERP) 6 bulan	per-dokumen	Rp 600,000.00 <br><br></li>
                            <li>Multiple Exit Re-Entry Permit (MERP) 1 tahun	per-dokumen	Rp 1,000,000.00 <br><br></li>
                            <li>Multiple Exit Re-Entry Permit (MERP) 2 tahun	per-dokumen	Rp 1,750,000.00</li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </div>         
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="service" class="sevices section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Layanan Keimigrasian</h2>
          </div>
        </div>
      </div>

      <div class="row g-3">
        <div class="col-lg-4">
          <div class="card bg-dark pb-2">
            <div class="card-body">
              <h2 class="card-title text-light text-center">Layanan Paspor Hilang</h2>
              <div class="card card-body">
                <div style="font-weight:bold;">Penggantian paspor biasa apabila paspor hilang dapat diajukan dengan melengkapi persyaratan berikut. <br><br></div>
                <ol>
                  <li>Surat lapor kehilangan dari kepolisian setempat <br></li>
                  <li>Kartu tanda penduduk (KTP) yang masih berlaku <br></li>
                  <li>Kartu keluarga (KK) <br></li>
                </ol>
                <div class="row g-3">
                  <div class="col-lg-6">
                    <div class="text-center">
                      <button type="button" class="btn btn-warning" data-bs-toggle="#" href="#" role="button" aria-expanded="false" aria-controls="#">Read More</button>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="text-center">
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rusak">Lanjutkan</button>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="rusak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <form id="update_form" action="save.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                          <h4 class="modal-title">Layanan Paspor Rusak</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p class="text-danger">Mohon Mengisi Data yang sesuai dengan KTP</p>
                          <div class="form-group mb-2">
                            <label>Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" id="nama">
                          </div>
                          <div class="form-group mb-2">
                            <label>NIK <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nik" id="nik">
                          </div>
                          <div class="form-group mb-2">
                            <label>Tanggal Lahir <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="tgllahir" id="tgllahir">
                          </div>
                          <div class="form-group mb-2">
                            <label>Nama Ibu (sesuai KK) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="namaibu" id="namaibu">
                          </div>
                          <div class="form-group mb-2">
                            <label>Tanggal Kedatangan <span class="text-danger">*</span></label>
                            <input type="datetime-local" class="form-control" name="tgldatang" id="tgldatang">
                          </div>
                          <div class="form-group mb-2">
                            <label>Alamat (sesuai KTP) <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"></textarea>
                          </div>
                          <div class="form-group mb-2">
                            <label>Kronologi Kejadian <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="kronologi" id="kronologi" cols="30" rows="5"></textarea>
                          </div>
                          <input type="hidden" class="form-control" name="laporan" id="laporan" value="Paspor Rusak">
                        </div>
                        <div class="modal-footer" style="background-color: #e3e3e3;">
                          <input type="hidden" value="1" name="tipe">
                          <input type="hidden" value="<?php echo $user ?>" name="idUser">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-info" id="btn-update">Kirim</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card bg-dark pb-2">
            <div class="card-body">
              <h2 class="card-title text-light text-center">Layanan Paspor Rusak</h2>
              <div class="card card-body">
                <div style="font-weight:bold;">Penggantian paspor biasa apabila paspor Rusak dapat diajukan dengan melengkapi persyaratan berikut. <br><br></div>
                <ol>
                  <li>Kartu tanda penduduk (KTP) yang masih berlaku atau surat keterangan pindah ke luar negeri <br></li>
                  <li>Kartu keluarga (KK) <br></li>
                  <li>Dokumen berupa akta kelahiran, akta perkawinan, buku nikah, ijazah, atau surat baptis....................... <br></li>
                  <div class="collapse" id="collapse55">
                    <li>Surat pewarganegaraan Indonesia bagi Orang Asing yang memperoleh kewarganegaraan Indonesia atau penyampaian pernyataan untuk memilih kewarganegaraan sesuai dengan ketentuan peraturan perundang-undangan</li>
                    <li>Surat penetapan ganti nama (bagi yang telah mengganti nama) dari pejabat yang berwenang <br></li>
                    <li>Paspor biasa lama <br></li>
                  </div>
                </ol>
                <div class="row g-3">
                  <div class="col-lg-6">
                    <div class="text-center">
                      <button type="button" class="btn btn-warning" data-bs-toggle="collapse" href="#collapse55" role="button" aria-expanded="false" aria-controls="collapse55">Read More</button>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="text-center">
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rusak">Lanjutkan</button>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="rusak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <form id="update_form" action="save.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                          <h4 class="modal-title">Layanan Paspor Rusak</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p class="text-danger">Mohon Mengisi Data yang sesuai dengan KTP</p>
                          <div class="form-group mb-2">
                            <label>Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" id="nama">
                          </div>
                          <div class="form-group mb-2">
                            <label>NIK <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nik" id="nik">
                          </div>
                          <div class="form-group mb-2">
                            <label>Tanggal Lahir <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="tgllahir" id="tgllahir">
                          </div>
                          <div class="form-group mb-2">
                            <label>Nama Ibu (sesuai KK) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="namaibu" id="namaibu">
                          </div>
                          <div class="form-group mb-2">
                            <label>Tanggal Kedatangan <span class="text-danger">*</span></label>
                            <input type="datetime-local" class="form-control" name="tgldatang" id="tgldatang">
                          </div>
                          <div class="form-group mb-2">
                            <label>Alamat (sesuai KTP) <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"></textarea>
                          </div>
                          <div class="form-group mb-2">
                            <label>Kronologi Kejadian <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="kronologi" id="kronologi" cols="30" rows="5"></textarea>
                          </div>
                          <input type="hidden" class="form-control" name="laporan" id="laporan" value="Paspor Rusak">
                        </div>
                        <div class="modal-footer" style="background-color: #e3e3e3;">
                          <input type="hidden" value="1" name="tipe">
                          <input type="hidden" value="<?php echo $user ?>" name="idUser">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-info" id="btn-update">Kirim</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card bg-dark pb-2">
            <div class="card-body">
              <h2 class="card-title text-light text-center">Layanan Penggantian Data Paspor</h2>
              <div class="card card-body">
                <div style="font-weight:bold;">Penggantian paspor biasa apabila Terjadi Perubahan data dapat diajukan dengan melengkapi persyaratan berikut. <br><br></div>
                <ol>
                  <li>E-KTP asli dan fotokopi <br></li>
                  <li>Kartu Keluarga asli dan fotokopi <br></li>
                  <li>Dokumen pendukung yang dikeluarkan oleh instansi pemerintah sebagai dasar perubahan data paspor seperti surat penetapan pengadilan maupun surat nikah/ akta perkawinan. <br></li>
                  <div class="collapse" id="collapse56">
                    <li>Akte kelahiran atau Ijazah SD/SMP/SMA</li>
                    <li>Paspor asli dan fotokopi <br></li>
                    <li>Formulir imigrasi<br></li>
                  </div>
                </ol>
                <div class="row g-3">
                  <div class="col-lg-6">
                    <div class="text-center">
                      <button type="button" class="btn btn-warning" data-bs-toggle="collapse" href="#collapse56" role="button" aria-expanded="false" aria-controls="collapse56">Read More</button>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="text-center">
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rusak">Lanjutkan</button>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="rusak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <form id="update_form" action="save.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-header">
                          <h4 class="modal-title">Layanan Paspor Rusak</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p class="text-danger">Mohon Mengisi Data yang sesuai dengan KTP</p>
                          <div class="form-group mb-2">
                            <label>Nama <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nama" id="nama">
                          </div>
                          <div class="form-group mb-2">
                            <label>NIK <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="nik" id="nik">
                          </div>
                          <div class="form-group mb-2">
                            <label>Tanggal Lahir <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="tgllahir" id="tgllahir">
                          </div>
                          <div class="form-group mb-2">
                            <label>Nama Ibu (sesuai KK) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="namaibu" id="namaibu">
                          </div>
                          <div class="form-group mb-2">
                            <label>Tanggal Kedatangan <span class="text-danger">*</span></label>
                            <input type="datetime-local" class="form-control" name="tgldatang" id="tgldatang">
                          </div>
                          <div class="form-group mb-2">
                            <label>Alamat (sesuai KTP) <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"></textarea>
                          </div>
                          <div class="form-group mb-2">
                            <label>Kronologi Kejadian <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="kronologi" id="kronologi" cols="30" rows="5"></textarea>
                          </div>
                          <input type="hidden" class="form-control" name="laporan" id="laporan" value="Paspor Rusak">
                        </div>
                        <div class="modal-footer" style="background-color: #e3e3e3;">
                          <input type="hidden" value="1" name="tipe">
                          <input type="hidden" value="<?php echo $user ?>" name="idUser">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-info" id="btn-update">Kirim</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Team section-->
  <section id="team" class="team section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>STRUKTURAL KANTOR IMIGRASI KEDIRI</h2>
            <p>Para Pegawai yang Menjabat di Kantor Imigrasi Kediri</p>
          </div>
        </div>
      </div>

      <div class="row g-3">
        <div class="col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="img/project-1-img/DENYIRAWAN.png" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Denny Irawan</h3>
              <p class="card-text">Kepala Kantor Imigrasi</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="img/project-1-img/SYAHRUL MUBARAK YAMANG.png" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Syahrul M. Yamang</h3>
              <p class="card-text">Kasi Intelijen dan Penindakan</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="img/project-1-img/Wilando.png" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Wilando</h3>
              <p class="card-text">Kasubsi Intelijen</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="img/project-1-img/ARIEF.png" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Arief Budi P.</h3>
              <p class="card-text">Kasubsi Penindakan</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col text-right">
          <span class="d-block mt-2">
            <a href="" class="btn btn-sm btn-primary text-1 text-uppercase">Lihat Semua</a>
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- News Section -->
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
            <a href="news.php" class="btn btn-sm btn-primary text-1 text-uppercase mt-3">Lihat Semua</a>
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

  <!--Contact Section-->
  <section id="contact" class="contact section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Contact Us</h2>
            <p>Kami siap melayani, jika ada saran,kritik dan masukan silahkan mengisi form dibawah</p>
          </div>
        </div>
      </div>

      <div class="row m-0">
        <div class="col-md-12 p-0 pt-4 p-4 m-auto">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <input type="text" class="form-control" required placeholder="Your Full Name">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <input type="email" class="form-control" required placeholder="Your Email Here">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <textarea name="" class="form-control" cols="30" rows="3"></textarea>
              </div>
            </div>
            <div class="text-right">
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ganti">Kirim
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <div class="card-body bg-dark">
    <div class="container">
      <div class="row g-3" style="padding-top:50px; margin-top:150px;">
        <div class="col-lg-4 text-center">
          <div class="header-row">
            <div class="header-logo">
              <img src="img/logo.jpg" width="50" height="48" data-sticky-width="82" data-sticky-height="82"><br><br>
              <p style="color:white; font-size:15px;"> <b>Kantor Imigrasi Kelas II Non TPI Kota Kediri</b></p>
              <p style="color:white; font-size:15px;"> <b>Kanwil Kemekumham Jawa Timur</b></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 text-center">
          <div class="header-row">
            <div class="header-logo" style="padding-top:50px;">
              <p style="color:white; font-size:15px;"> <b>Telepon/Fax : (0354) 6883007</b></p>
              <p style="color:white; font-size:15px;"> <b>E-mail : kanim_kediri@imigrasi.co.id</b></p>
              <p style="color:white; font-size:15px;"> <b>Whatsapp Pengaduan: 081133378284</b></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 text-center">
          <p style="color: white"><strong>Ikuti Kami</strong></p>
          <ul class="footer-social-icons social-icons social-icons-clean mb-3 d-flex justify-content-center" style="color:white; list-style:none; padding:6px;">
            <li class="bi bi-facebook " style="padding:5px;"><a href=""></a></li>
            <li class="bi bi-instagram" style="padding:5px;"><a href=""></a></li>
            <li class="bi bi-youtube" style="padding:5px;"><a href=""></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

  <!-- sweet alert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" />

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>





  <script type="text/javascript">
    $(document).ready(function() {

      load data tabel
      $('.tampildata').load("modul/bab/tampil.php");

      simpan data
      $(document).on('click', '#btn-update', function(e) {
        var data = $("#update_form").serialize();
        var nama = document.getElementById("nama").value;
        var nik = document.getElementById("nik").value;
        var tgllahir = document.getElementById("tgllahir").value;
        var namaibu = document.getElementById("namaibu").value;
        var tgldatang = document.getElementById("tgldatang").value;
        var waktudtg = document.getElementById("waktudtg").value;
        var alamat = document.getElementById("alamat").value;
        var kronologi = document.getElementById("kronologi").value;
        var laporan = document.getElementById("laporan").value;

        if (nama != "" && nik != "" && tgllahir != "" && namaibu != "" && tgldatang != "" && waktudtg != "" && alamat != "" && kronologi != "" && laporan != "") {
          $.ajax({
            data: data,
            type: "post",
            url: "save.php",
            success: function(dataResult) {
              alert('masuk');
              var dataResult = JSON.parse(dataResult);
              if (dataResult.statusCode == 200) {
                $('#addModal').modal('hide');
                alert('Data added successfully !'); 
                location.reload();	
                swal({
                  title: "Sukses!",
                  text: "Berhasil menyimpan data",
                  type: "success"
                }, function() {
                  untuk merefresh data
                  $('.tampildata').load("modul/bab/tampil.php");
                  location.href("print.php");
                });
              } else if (dataResult.statusCode == 201) {
                alert(dataResult);
              }
            },
            error: function(dataResult) {
              console.log(dataResult.responseText)
            }
          });
        }
      });
    });
  </script>
</body>
</html>
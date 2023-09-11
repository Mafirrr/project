<?php
include "koneksi.php";
session_start();
// error_reporting(0);



$username = $_SESSION['username'];
if (isset($_COOKIE['username'])) {
  if ($_COOKIE['username'] == $username) {
    //jika valid, set session login
    $_SESSION['username'] == $username;
  }
} else {
  header("Location: login.php");
}
// if (!isset($_SESSION["username"])) {
//     header("Location: login.php");
//     exit();
// }

$thp = mysqli_query($conn, "SELECT * FROM user where username = '$username' ");
$vthp = mysqli_fetch_array($thp);
$user = $vthp['idUser'];
$email = $vthp['idUser'];
// echo $user;

$xx = mysqli_query($conn, "SELECT * FROM layanan where idUser = '$user' ORDER BY `layanan`.`idLayanan` DESC LIMIT 1");
$yy = mysqli_fetch_array($xx);

?>


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
  <!-- <link rel="stylesheet" href="style1.css"> -->
  <link rel="stylesheet" href="stylep.css" />

</head>


<body>

  <div class="col-md-12 ">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
        <div>
          <table class="table table-bordered">
          <nav class="navbar  bg-body-tertiary">
        <div class="container d-block">
          <div class="row">
            <div class="col-md-3 text-center">
              <img class="img-responsive" alt="logo" src="img/logo.jpg" style="width: 120px;">
            </div>
            <div class="col-md-9 text-center">
              <h2>KEMENTERIAN HUKUM DAN HAK ASASI MANUSIA 
                REPUBLIK INDONESIA <br>
                KANTOR IMIGRASI KELAS II NON TPI KEDIRI
              </h2>
              <h6>
                JalanJawa No. 135, Dsn. Bedrek Selatan, Ds./Kec.Grogol, Kab. Kediri 64151 <br>
                Telp. (0354) 688307 <br>
                Laman : <a href="http://kediri.imigrasi.go.id">http://kediri.imigrasi.go.id</a>, Surel : imigrasi.kediri@gmail.com

              </h6>
            </div>
          </div>
        </div>
      </nav>
            <thead>
              <tr>
                <th width="150px">Jenis Layanan</th>
                <th width="500px"><?php echo $yy['laporan'] ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nama</td>
                <td></i><?php echo $yy['nama'] ?></td>
              </tr>
              <tr>
                <td>NIK</td>
                <td></i> <?php echo $yy['nik'] ?></td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td></i> <?php echo date('d F Y', strtotime($yy['tgllahir'])) ?></td>
              </tr>
              <tr>
                <td>Tanggal Kedatangan</td>
                <td></i> <?php echo date('d F Y H:i:s', strtotime($yy['tgldatang'])) ?></td>
              </tr>
              <tr>
                <td>Kronologi Kejadian</td>
                <td><p><?php echo $yy['kronologi'] ?></p> </td>
              </tr>
              <!-- <tr>
                <td class="text-right">
                  <p>
                    <strong>Kronologi: </strong>
                  </p>
                </td>
                <td>
                  <p>
                    <strong><i class="fa fa-inr"></i></strong>
                  </p>
                </td>
              </tr> -->
              <!-- <tr>

                <td class="text-right">
                  <h2><strong>Total: </strong></h2>
                </td>
                <td class="text-left text-danger">
                  <h2><strong><i class="fa fa-inr"></i> 31.566/-</strong></h2>
                </td>
              </tr> -->
            </tbody>
          </table>
          <tr>
                <td> *NOTED..</td>
                <td> Mohon membawa kelengkapan serta dokumen asli pada saat proses BAP, Apabila ditemukan kecurangan maka paspor akan ditangguhkan!. <br> <br></td>
              </tr>
        </div>
        <a href="logout.php" class="btn btn-warning">Logout</a>
        <script>
          window.print();
        </script>


        <!-- <div class="row">
          <div class="receipt-header receipt-header-mid receipt-footer">
            <div class="col-xs-8 col-sm-8 col-md-8 text-left">
              <div class="receipt-right">
                <p><b>Date :</b> 15 Aug 2016</p>
                <h5 style="color: rgb(140, 140, 140);">Thanks for shopping.!</h5>
              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
              <div class="receipt-left">
                <h1>Stamp</h1>
              </div>
            </div>
          </div>
        </div> -->

      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</body>

</html>
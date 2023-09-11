<?php
include 'koneksi.php';

date_default_timezone_set("Asia/Jakarta");

        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $tgllahir = $_POST['tgllahir'];
        $namaibu = $_POST['namaibu'];
        $tgldatang = $_POST['tgldatang'];
        $alamat = $_POST['alamat'];
        $kronologi = $_POST['kronologi'];
        $laporan = $_POST['laporan'];
        $idUser = $_POST['idUser'];
        $sql = mysqli_query($conn, "INSERT INTO `layanan` ( `nama`, `nik`, `tgllahir`, `namaibu`, `tgldatang`, `alamat`, `kronologi`, `laporan`, `idUser`) 
        VALUES ('$nama', '$nik', '$tgllahir', '$namaibu', '$tgldatang', '$alamat', '$kronologi', '$laporan', '$idUser')");

?>
<script>
	alert("Berhasil simpan data");
	window.location.href="print.php";
</script>
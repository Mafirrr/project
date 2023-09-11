
<?php
//koneksi ke database
// $host_db    = "localhost";
// $user_db    = "root";
// $pass_db    = "";
// $nama_db    = "priject_imi";
// $conn    = mysqli_connect($host_db,$user_db,$pass_db,$nama_db);


$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "project_imi";

	//create variable connectin
	$conn = mysqli_connect($hostname, $username, $password, $database);
	
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

?>
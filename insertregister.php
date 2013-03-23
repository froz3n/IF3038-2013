<?php
if (isset($_POST['btnsubmit'] )) {
  $nama = $_POST['nama_lengkap'];
	$ttl = $_POST['tanggal_lahir'];
	$ava = $_POST['avatar'];
	$pass = $_POST['password'];
	$imel = $_POST['email'];
	$usern = $_POST['username'];

$conn = mysqli_connect("localhost", "root", "", "progin_405_13510005");

if (mysqli_connect_errno()) {
echo "Koneksi ke server gagal dilakukan";
exit();
}

$sql= "insert into user (fullname, tanggal_lahir, avatar, password, email, username)".
"values('$nama', '$ttl', '$ava', '$pass', '$imel', '$usern' )";

mysqli_query($conn, $sql);
$num = mysqli_affected_rows($conn);

if ($num > 0) {
 echo "Data yang anda masukkan sudah disimpan";}
 else {
 echo "Data gagal disimpan ke dalam database";
 }
 }
 ?>
	

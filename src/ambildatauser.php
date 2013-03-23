<?php 

			$dbname = "progin_405_13510005";
			$host ="localhost";
			$username="root";
			$password="";

			$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno())
{
echo "Koneksi ke server gagal dilakukan";
exit();
}

$query = "select * " . "from user order by Username";
$result=mysqli_query($conn,$query);

if ($result) 
{
	while ($row = mysqli_fetch_row($result)) {
	 $username=$row[0];
	 $password=$row[1];
	 $fullname=$row[3];
	 $email=$row[2];
	 $tanggal=$row[4];
	 $avatar=$row[5];
	 
	 
	}
	 mysqli_free_result($result);
	
	 }
	 
	 mysqli_close($conn);
	

?>

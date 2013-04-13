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

$query = "select * " . "from komentar order by ID_Komentar";
$result=mysqli_query($conn,$query);

if ($result) 
{
	while ($row = mysqli_fetch_row($result)) {
	 $ID=$row[0];
	 $isikom=$row[1];
	 $tanggalkom=$row[2];
	
	 
	 
	 
	 
	}
	 mysqli_free_result($result);
	
	 }
	 
	 mysqli_close($conn);
	

?>

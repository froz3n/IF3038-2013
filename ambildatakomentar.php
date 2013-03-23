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

$query = "select * " . "from tugas order by ID_Tugas";
$result=mysqli_query($conn,$query);

if ($result) 
{
	while ($row = mysqli_fetch_row($result)) {
	 $IDTugas=$row[0];
	 $namatugas=$row[1];
	 $tanggaltugas=$row[2];
	 $status=$row[3];
	 $kategori=$row[4];
	 $lampiran=$row[5];
	 
	 
	 
	 echo $IDTugas;
	 echo $namatugas;
	 
	}
	 mysqli_free_result($result);
	
	 }
	 
	 mysqli_close($conn);
	

?>

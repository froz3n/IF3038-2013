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

$query = "select fullname, avatar " . "from user order by fullname";
$result=mysqli_query($conn,$query);

if ($result) 
{
	while ($row = mysqli_fetch_row($result)) {
	 $fullname=$row[0];
	 $sayur=$row[1];
	 
	 
	 
	 echo $fullname;
	 echo $sayur;
	 
	}
	 mysqli_free_result($result);
	
	 }
	 
	 mysqli_close($conn);
	

?>

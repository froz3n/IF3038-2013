<?php
/*file save_data.php*/
  $conn=mysql_connect("localhost","progin","progin"); /*sesuiakn dengan komputer anda*/ 
	mysql_select_db('progin_405_13510105'); /*sesuikan dengan komputer anda */ 
	if($_POST['action']=='save'){
	 //validasi data
	 $username=$_POST['username'];
	 $password=$_POST['password'];
	 $nama_lengkap=$_POST['nama_lengkap'];
	 $tanggal_lahir=$_POST['tanggal_lahir'];
	 $email=$_POST['email'];
	 $avatar=$_POST['avatar'];
	 /*settype($fname,'string');
	 settype($lname,'string');
	 settype($message,'string');
	 //validasi email;
	 if(!preg_match('/^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/',$email)){
	 echo 'Ivalid Email Address'; exit();
	 }
	 //validasi phone
	 if(!preg_match('/^[0-9]+$/',$phone)){
	 echo 'Invalid phone number'; exit();
	 }*/
	 //saving data
	 $query="INSERT INTO progin_405_13510105 (username,password,nama_lengkap,tanggal_lahir,email,avatar) VALUES ('$username','$password','$nama_lengkap','$tanggal_lahir','$email','$avatar')";
	 $hasil=@mysql_query($query);
	 if($hasil){
	 echo '<font color="green">DATA HAS BEEN SAVED</font>';
	 }else {
	 echo '<font color="red">Error, CAN NOT SAVE DATA</font>';
	 }
	}
?>

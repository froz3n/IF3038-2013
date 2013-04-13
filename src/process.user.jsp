<?php
session_start();
//include file(s)
require_once 'class.user.php';
$conn = mysqli_connect("localhost", "root", "", "progin_405_13510005");
if (mysqli_connect_errno()) {
echo "Koneksi ke server gagal dilakukan";
exit();
}

        $username = $_GET['u'];
        $password = $_GET['p'];

        $user = new User();
        $user->setUsername($username);
        $user->setPassword($password);

        $process_login->doLogin($user);

    //Login
    function doLogin(User $user){
        $qLogin = "SELECT * FROM user WHERE Username = '".mysql_real_escape_string($user->getUsername())."' AND Password = MD5('".$user->getPassword()."')";
        $rLogin = mysql_query($qLogin) or die(mysql_error());

        if(mysql_num_rows($rLogin) == 1){
            $data = mysql_fetch_object($rLogin);
            $_SESSION['my_session'] = $data->USERNAME;
            $_SESSION['my_name'] = $data->NAMA;
            echo 'OK';
        }else{
            echo "Sorry, Username and Password does'n match.";
        }
    }
?>

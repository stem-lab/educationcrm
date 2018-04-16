<?php
$bd_adress = "localhost";
$bd_login = "id4205462_admin";
$bd_password = "41deluhe";
$bd_name = "id4205462_appdb";

if($_GET['action']=="login"){
$conn = mysqli_connect($bd_adress, $bd_login, $bd_password);$db_connect= mysqli_select_db($conn, $bd_name);

$sql = "SELECT IsWorker FROM User WHERE Login = '".$_GET['Login']."' AND Password='".$_GET['Password']."';";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)==0)
    echo 'Wrong login or password';
else
{
    echo 'OK';
}
}
?>
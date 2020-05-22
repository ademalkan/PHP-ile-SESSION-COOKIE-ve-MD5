<?php


$baglan = mysqli_connect('localhost', 'root', '', 'db');
$sql="SELECT * FROM tablo";
$vericek=mysqli_query($baglan,$sql);
$veriler=mysqli_fetch_array($vericek,MYSQLI_ASSOC);
 
session_start();
ob_start();
if(($_GET["username"]==$veriler['username']) and (md5($_GET["password"])==$veriler['password'])){
$_SESSION["login"] = "true";
$_SESSION["username"] = $veriler['username'];
$_SESSION["password"] = $veriler['password'];
header("Location:admin.php");
}else{
header("Location:login.html");
}
ob_end_flush();
?>
 ?>

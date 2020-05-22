<?php

$baglan = mysqli_connect('localhost', 'root', '', 'db');
$sql="SELECT * FROM tablo";
$vericek=mysqli_query($baglan,$sql);
$veriler=mysqli_fetch_array($vericek,MYSQLI_ASSOC);

session_start();
if(!isset($_SESSION["login"])){
echo header('Location:login.html');
}else{
echo "<h3>admin.php</h3><br>";
echo "<a href=logout.php>Çıkış Yap</a>";
}

 ?>

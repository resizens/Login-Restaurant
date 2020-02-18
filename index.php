<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<div align='center'>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div>

<html>
<body background="1_rSNOFEcGq43bzUJYpowEvQ.png">
<hr size="4" color="#FFCC00">
<center><img src=mcdonalds_PNG23.png></center>
<h2><center> Our Menu :</center></h2>
<h2><u><img src=kisspng-hamburger-slider-steers-french-fries-pizza-5afa63d6b7a1a0.1970546615263589987522.png width=332 lenght=198>BIG Burger</u></h2>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2><u><img src=pizza_PNG44089.png width=322 lenght=188> Italian Pizza</u></h2>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2><u><img src=steak_PNG84.png width=322 lenght=188>BBQ Steak</u></h2>
<br>
<br>
<br>
<br>
<br>
<h2><u><img src=585ac06b4f6ae202fedf293b.png width=272 lenght=138>Fried Fries</u></h2>
<hr size="4" color="#FFCC00">
<h2><center>Call +6233455667654 to order</center></h2>
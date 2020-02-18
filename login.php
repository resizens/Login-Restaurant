<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>
<body background=shutterstock_773094754.jpg>
<title>Form Login</title>
<div align='center'>
  <form action="proseslogin.php" method="post">
  <center><img src=mcdonalds_PNG23.png></center>
  <h1>Masuk</h1>
  <table>
  <tbody border="4px"> 
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
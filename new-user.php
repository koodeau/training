<?php
$connection=mysqli_connect('server','login','password','database');
if($connection==false){echo"<h1>CANNOT CONNECT TO THE DATABASE</h1><br>".mysqli_connect_error().die();}
$login=$_POST['login'];$password=$_POST['password'];
$query_new_user=mysqli_query($connection,"INSERT INTO `users` (`login` , `password`) VALUES ('$login' , '$password')");echo"<script>alert('Your account has been succefully created!');</script>";
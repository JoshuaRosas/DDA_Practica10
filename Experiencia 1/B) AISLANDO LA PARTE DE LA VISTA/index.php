<?php
 $link = mysqli_connect("localhost", "root", "", "blog_db");
 /* verificar la conexión */
 if (mysqli_connect_errno()) {
 printf("Conexión fallida: %s\n", mysqli_connect_error());
 exit();
 }
 $consulta = "SELECT id, title from post";
 $posts = array();

 if ($result = mysqli_query($link, $consulta)) {
 while($row = mysqli_fetch_assoc($result)){
 $posts[] = $row;
 }
 }
 mysqli_close($link);
require 'list.php';
?>

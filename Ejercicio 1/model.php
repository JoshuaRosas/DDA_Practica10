<?php
//model.php
function open_database_connection()
{
 $link = mysqli_connect("localhost", "root", "KeyJeremyMySql", "Practica_10_Ejercicio_1");
 /* verificar la conexión */
 if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
 exit();
 }
 return $link;
}
function close_database_connection($link)
{
 mysqli_close($link);
}
function get_all_posts()
{
 $link =open_database_connection();
 $consulta = "SELECT * from mascota";
 $result = mysqli_query($link, $consulta);
 $posts = array();
 while($row = mysqli_fetch_assoc($result)){
 $posts[] = $row;
 }
 close_database_connection($link);
 return $posts;
}
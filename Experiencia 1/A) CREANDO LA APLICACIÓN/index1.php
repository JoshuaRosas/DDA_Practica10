<!DOCTYPE html>

<html>
 <head>
 <?php
 $link = mysqli_connect("localhost", "root", "KeyJeremyMySql", "blog_db");
 /* verificar la conexión */
 if (mysqli_connect_errno()) {
 printf("Conexión fallida: %s\n", mysqli_connect_error());
 exit();
 }
 $consulta = "SELECT id, title from post";
 ?>
 <meta charset="UTF-8">
 <title>List of Post</title>
 </head>
 <body>
 <h1>List of Post</h1>
 <ul>
 <?php
 if ($result = mysqli_query($link, $consulta)) {
 while($row = mysqli_fetch_assoc($result)):?>
 <li>
 <a href="/show.php?id=<?php echo $row['id']?>">
 <?php echo $row['title']?>
 </a>
 </li>
 <?php endwhile;
 }
 mysqli_free_result($result);
 ?>
 </ul>
 </body>
</html>
<?php
mysqli_close($link);


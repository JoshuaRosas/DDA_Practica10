<html>
 <head>
 <title>List of Post1</title>
 </head>
 <body>
 <h1>List of Post1</h1>
 <ul>
 <?php foreach ($posts as $post): ?>
 <li>
 <a href="/read?id=<?php echo $post['id']?>">
 <?php echo $post['title']?>
 </a>
 </li>
 <?php endforeach; ?>

 </ul>
 </body>
</html>
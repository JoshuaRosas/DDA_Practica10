<?php $title1 = 'LISTA DE MASCOTAS' ?>
<?php ob_start() ?>
 <h1>LISTA DE MASCOTAS</h1>
 <ul>
 <?php foreach ($posts as $post): ?>
 <li>
 <a href="/read?id=<?php echo $post['nombre']?>">
 <?php echo $post['nombre']?>
 </a>
 </li>
 <?php endforeach; ?>
 </ul>
 <?php $content = ob_get_clean() ?>
 <?php include 'base.php' ?>

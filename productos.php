<?php include("template/cabecera.php"); ?>

<?php 
include ("administrador/config/bd.php");
$sentenciaSQL=$conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listalibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);  
?>

<?php foreach ($listalibros as $libros) { ?>

<div class="col-md-3">    
<div class="card">
 <img class="card-img-top" src="./img/<?php echo $libros['imagen']; ?>" alt="">
 <div class="card-body">
 <h4 class="card-title"><?php echo $libros['nombre']; ?></h4>
 <a name="" id="" class="btn btn-primary" href="https://goalkicker.com/" role="button"> ver más </a>        
</div>
</div>
</div>

<?php } ?>

<?php
include("template/pie.php");
?>
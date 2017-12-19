<div class="container-fluid">
    <h2><?php echo $post['titulo'] ?></h2>
    
    <p><?php echo $post['descripcion'] ?></p>
    <?php foreach($images as $image): ?>
        <img src="<?php echo site_url()?>uploads/<?php echo $image['nombre']?>">
    <?php endforeach; ?>
    <hr>
    

</div>


<div class="container">
    <?php if($msg){ ?>
    <div class="alert alert-success" role="alert" style="margin: 0 15%">
        <?= $msg ?>
    </div>
      <?php } ?>

    <div class="push"></div>
      <h1 class="text-center upcase bold"><?= $titulo ?></h1>
      <div class="push"></div>

    <?php foreach($posts as $post) : ?>
      <div class="row">
        <div class="col-3">
        <?php $images = $this->image_model->getImages($post['id']);?>
              
            <?php if($images) : ?>
              <img class="img-thumbnail" src="<?php echo base_url('uploads/' . $images[0]['nombre']); ?>">
            <?php else : ?>
              <img class="img-thumbnail" src="<?php echo base_url('uploads/default-nopic.png') ; ?>">
            <?php endif; ?>
        </div>
        <div class="col-9">        
            <h3><?php echo $post['titulo']; ?></h3>
            <small><?php echo $post['creado']?></small> 
    
            <p><?php echo word_limiter($post['descripcion'], 50) ?></p>
            <p><a class="btn btn-info"href="<?php echo site_url('/proyectos/' . $post['slug']); ?>"> Leer más</a></p>
            <div class="push"></div>
        </div>
      </div>
  
    <div class="push"></div>
 
    
  
    <?php endforeach; ?>
</div>
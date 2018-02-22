


<div class="wrapper2">
            <div class="wrapper">
                <a  class="ninja-btn" title="menu"><span></span></a>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="<?php echo base_url() ?>">_01 HOME
                    <span class="selector-menu"></span>
                </a>
                <a href="<?php echo base_url('firma'); ?>">_02 Nuestra Firma
                    <span class="selector-menu"></span>
                </a>
                <a href="<?php echo base_url('servicios'); ?>">_03 Servicios
                    <span class="selector-menu"></span>
                </a>
                <a href="<?php echo base_url() . 'proyectos' ?>">_04 Proyectos
                    <span class="selector-menu"></span>
                </a>
                <a href="<?php echo base_url() . 'contacto' ?>">_05 Contacto
                    <span class="selector-menu"></span>
                </a>
            </div>
             <?php if($images): ?>
                <div class="img-holder">
                    <!-- <img src="<?php echo base_url('uploads/' . $images[0]['nombre']);?>" class="img-fluid fullw-image" alt="Responsive image"> -->
                    <div class="w-100 fullw-img" style="height: 450px;background-image: url('../uploads/<?php echo $images[0]['nombre'];?>')"></div>
                    <div class="caption">
                        <h1 class="white bold text-center" style="letter-spacing: 4px;"><?php echo $post['titulo'] ?></h1>
                        <p class="white text-center" style="letter-spacing: 11px">| CODIGO UB |</p>
                    </div>
                </div> 
            <?php endif; ?>

</div>

<div class="push"></div>

<div class="container">
    <p><?php echo $post['descripcion'] ?></p>
    <div class="row">
        <?php foreach($images as $image): ?>
            <div class="col-6 proyecto-view" style="height: 450px;background-image: url('../uploads/<?php echo $image['nombre'];?>')">
            </div>
        <?php endforeach; ?>
    </div>
    <hr> 
</div>
    
  
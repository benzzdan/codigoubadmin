        <a class="btn btn-success"href="<?php echo base_url('admin/crear_record'); ?>">Agregar proyecto</a>


        <?php if($this->session->flashdata('post_success')): ?>
    <div class="row text-center">
        <?php echo '<div class="alert alert-success  mx-auto" style="width: 900px;margin-top: 5vh">' . $this->session->flashdata('post_success') . '</div>';?>
    </div>
    <?php endif ?>

    <?php if($this->session->flashdata('update_success')): ?>
    <div class="row text-center">
        <?php echo '<div class="alert alert-success  mx-auto" style="width: 900px;margin-top: 5vh">' . $this->session->flashdata('update_success') . '</div>';?>
    </div>
    <?php endif ?>
    <?php if($this->session->flashdata('deleted_success')): ?>
    <div class="row text-center">
        <?php echo '<div class="alert alert-success  mx-auto" style="width: 900px;margin-top: 5vh">' . $this->session->flashdata('deleted_success') . '</div>';?>
    </div>
    <?php endif ?>


      <h1 style="margin: 9vh 0 10vh 0;" class="text-center upcase bold"><?= $titulo ?></h1>

    <?php foreach($proyectos as $proyecto) : ?>
      <div class="row">
        <div class="col-2">
        <?php $images = $this->image_model->getImages($proyecto['id']);?>
            <?php if($images) : ?>
              <img class="img-thumbnail" src="<?php echo base_url('uploads/' . $images[0]['nombre']); ?>">
            <?php else : ?>
              <img class="img-thumbnail" src="<?php echo base_url('uploads/default-nopic.png') ; ?>">
            <?php endif; ?>
        </div>
        <div class="col-8">        
            <h3><?php echo $proyecto['titulo']; ?></h3>
            <small><?php echo $proyecto['creado']?></small> 
            <!-- <a class="btn btn-primary btn-sm white" disabled>
            <?php 
              if($proyecto['nombre']){ 
                echo $proyecto['nombre'];
              } 
              ?>
            </a> -->
            <p><?php echo word_limiter($proyecto['descripcion'], 30) ?></p>
            <!-- <p><a class="btn btn-info"href="<?php echo site_url('/posts/' . $proyecto['slug']); ?>"> Leer más</a></p> -->
        </div>
        <div class="col-2">
            <a href="<?php echo site_url('/proyectos/' . $proyecto['slug']); ?>" target="_blank" class="btn btn-primary btn-sm" title="Ver">
              <i class="fa fa-fw fa-eye"></i>
            </a>
            <a href="<?php echo base_url();?>admin/proyectos/editar/<?php echo $proyecto['id'] ?>"  class="btn btn-secondary btn-sm" title="Editar">
              <i class="fa fa-fw fa-pencil-square-o"></i>
            </a>
            <a style="cursor: pointer" onclick="deleteProyect()" class="btn btn-danger btn-sm" title="Borrar">
              <i class="fa fa-fw fa-trash"></i> 
            </a>
                <!-- <a target="_blank" href="<?php echo site_url('/proyectos/' . $proyecto['slug']); ?>" class="btn btn-primary btn-sm">Ver</button> -->
                <!-- <a class="btn btn-secondary btn-sm" href="<?php echo base_url();?>admin/proyectos/editar/<?php echo $proyecto['id'] ?>">Editar</a> -->
        
            <?php echo form_open('/admin/delete/' . $proyecto['id'], array("id" => "delete_form")) ?>
              <!-- <input type="submit" value="Borrar" class="btn btn-danger btn-sm"> -->
            </form>            
        </div>
      </div>
      <div class="push"></div>
      <hr>
    <?php endforeach; ?>


        <script>
            function deleteProyect(){
                $('#delete_form').submit();
            }
        </script>


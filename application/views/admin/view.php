
    <h2><?php echo $proyecto['titulo'] ?></h2>
    
    <p><?php echo $proyecto['descripcion'] ?></p>
    
    <?php foreach($images as $image): ?>
        <img src="<?php echo site_url()?>assets/images/proyectos/<?php echo $image['nombre']?>">
    <?php endforeach; ?>
    <hr>
    
    <div class="form-inline">
        <a class="btn btn-default pull-left" href="<?php echo base_url();?>posts/edit/<?php echo $proyecto['slug'] ?>">Editar</a>
        <?php echo form_open('/posts/delete/' . $proyecto['id']) ?>
            <input type="submit" value="Borrar" class="btn btn-danger">
        </form>
    </div>

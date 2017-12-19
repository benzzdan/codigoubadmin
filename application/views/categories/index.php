 <div class="container">
    <?php if($msg){ ?>
    <div class="alert alert-success" role="alert" style="margin: 0 15%">
        <?= $msg ?>
    </div>
      <?php } ?>

    <div class="push"></div>
      <h1 class="text-center upcase bold"><?= $titulo ?></h1>
      <div class="push"></div>
<ul class="list-group">
  <?php foreach($categorias as $categoria) : ?>      
  <li class="list-group-item">
    <a href="<?php echo site_url('/categorias/proyectos/' . $categoria['id']); ?>"><?php echo $categoria['nombre'] ?></a>
    <a class="btn btn-danber" href="<?php echo site_url('categorias/edit/' . $categoria['id']); ?>">Edit</a>
    <?php echo form_open('/categorias/borrar/' . $categoria['id']) ?>
        <input type="submit" value="X" class="btn btn-danger">
    </form>
  </li>
    <div class="push"></div>
  <?php endforeach; ?>
</ul>
</div>
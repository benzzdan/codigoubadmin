<div class="container">


<?php if($this->session->flashdata('error_upload_no_post')): ?>
    <div class="row text-center">
        <?php echo '<div class="alert alert-danger  mx-auto" style="width: 900px;margin-top: 5vh">' . $this->session->flashdata('error_upload_no_post') . '</div>';?>
    </div>
    <?php endif ?>

    
    <h2><?= $title ?></h2>

    <?php echo validation_errors(); ?>
    
  <?php echo form_open('admin/proyectos/crear') ?>
    <div class="form-group">
    <label>Título</label>
    <input type="text" class="form-control" name="titulo" placeholder="Agregar un titulo">
  </div>
  <div class="form-group">
    <label>Descripción</label>
    <textarea id="editor1" class="form-control" placeholder="Escribe una descripción" name="descripcion"></textarea>
  </div>
  <div class="form-group">
    <label>Categoria</label>
    <select name="categoria_id" class="form-control">
      <?php foreach($categorias as $cat ): ?>
        <option value="<?php echo $cat['id'] ?>"><?php echo $cat['nombre'] ?></option>
<?php endforeach; ?>
    </select>
  </div>
  <!-- <div class="form-group" style="display: inline-grid">
    <label>Imagenes</label>
    <input type="file" name="file_upload[]" multiple size="20">
  </div> -->
  <br>
  <!-- <button type="submit" class="btn btn-primary">Agregar</button> -->
  <?php echo form_submit(array(
    'name' => 'file_submit',
    'value' => 'Agregar',
    'class' => 'btn btn-primary'
  )); ?>
  <?php echo form_close(); ?>

  
  <?php echo form_open('admin/upload', array("class" => "dropzone")); ?>
  <?php echo form_close(); ?>
</div>



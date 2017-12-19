<div class="container">
<div class="push"></div>
    <h2><?= $titulo ?></h2>

    <?php echo validation_errors(); ?>
    
    <?php echo form_open_multipart('categories/create'); ?>
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Agregar un nombre de categoria">
    </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
</div>
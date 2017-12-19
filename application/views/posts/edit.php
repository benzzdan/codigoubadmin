<div class="container-fluid">
    <?php echo validation_errors(); ?>


    <?php if($this->session->flashdata('error_submit')): ?>
    <div class="row text-center">
        <?php echo '<div class="alert alert-danger  mx-auto" style="width: 900px;margin-top: 5vh">' . $this->session->flashdata('error_submit') . '</div>';?>
    </div>
    <?php endif ?>

    <?php echo form_open_multipart('posts/update', array("id" => "updateformproyect")); ?>
    <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
        <div class="form-group">
        <h3>Título</h3>
        <input type="text" class="form-control"  name="titulo" placeholder="Agregar un titulo" value="<?php echo $post['titulo'];?>">
        </div>
        <div class="form-group">
            <h3>Descripción</h3>
            <textarea id="editor1" class="form-control"  placeholder="Escribe una descripción" name="descripcion">
                <?php echo $post['descripcion']; ?>
            </textarea>
        </div>
        <div class="form-group">
            <h3>Categoria</h3>

           

            <select name="categoria_id" class="form-control">
            <?php if($cat_name): ?>
                <option selected="selected" value="<?php echo $cat_name->id; ?>">
                    <?php echo $cat_name->nombre; ?>
                </option>
            <?php endif; ?>
            <?php foreach($categorias as $cat ): ?>
                <option value="<?php echo $cat['id'] ?>"><?php echo $cat['nombre'] ?></option>
            <?php endforeach; ?>
            </select>
     </div>

     <!-- <div class="form-group">
        <p>Imágenes</p>
<?php foreach($images as $image) : ?>
    <img  class="img-thumbnail" style="width: 200px; height: auto" src="<?php echo base_url('assets/images/proyectos/' . $image['nombre']); ?>">
<?php endforeach; ?>
        
     </div> -->
        <div class="form-group">
        <!-- <button type="submit" class="btn btn-success ">Agregar proyecto</button> -->
        <!-- <a class="btn btn-danger" href="#">Cancelar</a> -->
        </div>
    </form>

    <h3>Fotos</h3>
     
<?php echo form_open('admin/upload', array("class" => "dropzone", "id" => "myDropzone")); ?>
    <input id="proyect_id" type="hidden" name="proyecto_id" value="<?php echo $post['id'] ?>">
    <div class="dz-message" data-dz-message><span>Vacia tus fotos aqui</span></div>
  <?php echo form_close(); ?> 

<div class="push"></div>
  <!-- form to cancel de record creation  -->
  <?php echo form_open('posts/cancel_record') ?>
        <input id="proyect_id" type="hidden" name="proyecto_id" value="<?php echo $post['id'] ?>">
        <a style="color: white" onclick="updateform()" id="addproject" class="btn btn-success">Guardar</a>
        <button type="submit" class="btn btn-danger">Cancelar/Borrar</button>
 <?php echo form_close(); ?>

 <div class="push"></div>
 <a class="btn btn-secondary" href="<?php echo base_url('admin/proyectos'); ?>">Regresar</a>



</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>
     <script>
        Dropzone.options.myDropzone = {
        addRemoveLinks:true,
        dictRemoveFile: "Remover",
        acceptedFiles:".png,.jpg,.jpeg,.gif,.bmp,.doc,.docx,.pdf",
        removedfile: function(file){
          var nombre = file.name;
          console.log('esto es:' + nombre);
          $.ajax({
            type: "post",
            url: "<?php echo site_url('admin/removeImg') ?>",
            data: {file: nombre},
            dataType: 'html'
          });

          //Remove thumbnail 
          var previewElement;
          return (previewElement = file.previewElement) != null ? (previewElement.parentNode.removeChild(file.previewElement)) : (void 0);
        },
        init: function(){
          var me = this;
          $.get("<?php echo base_url('admin/getimagelist/' . $post['id']); ?>", function (data){
            if (data.length > 0 ) {
              $.each(data, function(key, value){
                var mockFile = {name: value.nombre, size: value.size};
                me.emit("addedfile", mockFile);
                me.options.thumbnail.call(me, mockFile, "<?php echo base_url() . "uploads/"; ?>" + value.nombre); 
                me.emit("complete", mockFile);
              });
            }
          });
        }
    
    };  


     </script>

        <script>
			CKEDITOR.replace( 'editor1' );
        </script>
        
        <script>
            function updateform(){
                $('#updateformproyect').submit();
            }
        </script>
   
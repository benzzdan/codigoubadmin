<h2>Cambiar contraseña</h2>
<div class="push">
</div>

<?php if(validation_errors()) :?>
	<div class="alert alert-danger">
		<?php echo validation_errors() ; ?>
	</div>
<?php endif; ?>

<?php if($this->session->flashdata('success_chng')): ?>
    <div class="row text-center">
        <?php echo '<div class="alert alert-success  mx-auto" style="width: 900px;margin-top: 5vh">' . $this->session->flashdata('success_chng') . '</div>';?>
    </div>
    <?php endif ?>

<?php echo form_open('admin/change_passwd') ?>
	<div class="form-group">
		<label for="password_confirm1">Contraseña</label>
		<input type="password" value="<?php echo $admin->password ;?>" name="password" class="form-control">
	</div>

	<div class="form-group">
	<label for="password_confirm2">Confirmar Contraseña</label>
		<input type="password" value="<?php echo $admin->password ;?>" name="password2" class="form-control">
	</div>

	<button class="btn btn-success" type="submit">Guardar</button>
<?php form_close() ; ?>
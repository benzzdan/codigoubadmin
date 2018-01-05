<h1 class="bold red text-center" style="margin-top: 5vh">CONTACTO</h1>

<div class="push">

</div>

<div class="container">
    <!-- <form id="contact-form" method="post" action="contact.php" role="form"> -->
        <?php echo form_open('pages/contacto_email', array('role' => 'form'));?>

        <div class="messages"></div>
        <div class="controls">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="nombre">Nombre *</label>
                        <input id="nombre" type="text" name="nombre" class="form-control" placeholder="Porfavor ingrese un nombre *" required="required" data-error="name is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_email">Email *</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Por favor ingrese su correo *" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="tel">Teléfono</label>
                        <input id="tel" type="tel" name="tel" class="form-control" placeholder="Por favor ingrese su número telefónico">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="mensaje">Mensaje *</label>
                    <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Mensaje *" rows="4" required="required" data-error="send a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-warning btn-send" value="Enviar">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong>*</strong> Estos campos son requeridos.</p>
            </div>
        </div>
        <?php echo form_close(); ?>
</div>
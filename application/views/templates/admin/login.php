<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Codigo UB | Admin </title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
</head>

<body>
<div class="row" style="margin-top: 3vh;">
    <?php if(validation_errors()):?>
        <div class='alert alert-danger text-center mx-auto' style="width: 900px"><?php echo validation_errors(); ?></div>
    <?php endif;?>
</div>
<div class="container" style="padding-top: 10vh">
        <?php echo form_open('admin/login'); ?> 
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Bienvenido Administrador</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">Usuario</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="username" class="form-control" id="email"
                                   placeholder="Usuario"  autofocus>
                        </div>
                    </div>
                </div>
       
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Contraseña</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Contraseña" >
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <!-- Put password error message here -->    
                        </span>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" style="padding-top: .35rem">
                    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                        <label class="form-check-label">
                            <input class="form-check-input" name="remember"
                                   type="checkbox" >
                            <span style="padding-bottom: .15rem">Remember me</span>
                        </label>
                    </div>
                </div>
            </div> -->
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block"><i class="fa fa-sign-in"></i> Entrar</button>
                </div>
            </div>
        </form>
    </div>

    <?php if($this->session->flashdata('error_login')): ?>
    <div class="row text-center">
        <?php echo '<div class="alert alert-danger  mx-auto" style="width: 900px;margin-top: 5vh">' . $this->session->flashdata('error_login') . '</div>';?>
    </div>
    <?php endif ?>
    <?php if($this->session->flashdata('error_admin')): ?>
    <div class="row text-center">
        <?php echo '<div class="alert alert-danger  mx-auto" style="width: 900px;margin-top: 5vh">' . $this->session->flashdata('error_admin') . '</div>';?>
    </div>
    <?php endif ?>

    <?php if($this->session->flashdata('success_login')): ?>
    <div class="row text-center">
        <?php echo '<div class="alert alert-success  mx-auto" style="width: 900px;margin-top: 5vh">' . $this->session->flashdata('success_login') . '</div>';?>
    </div>
    <?php endif ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
</body>
</html>
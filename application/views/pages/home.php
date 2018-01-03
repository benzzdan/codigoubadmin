


      <!--
    ####################################################
    C A R O U S E L
    ####################################################
    -->
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
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
            <a href="#">_05 Contacto
                <span class="selector-menu"></span>
            </a>
         </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <a href="https://bootstrapcreative.com/">
                    <!-- 
                    If you need more browser support use https://scottjehl.github.io/picturefill/
                    If a picture looks blurry on a retina device you can add a high resolution like this
                    <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">

                    What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                     -->
                     <picture>
                      <source srcset="<?php echo base_url('img/construction7.jpg'); ?>" media="(min-width: 1400px)">
                      <source srcset="<?php echo base_url('img/construction7.jpg');?>" media="(min-width: 769px)">
                       <source srcset="<?php echo base_url('img/construction7.jpg');?>" media="(min-width: 577px)">
                      <img srcset="<?php echo base_url('img/construction7.jpg');?>" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div>
                            <h2>Digital Craftsmanship</h2>
                            <p>We meticously build each site to get results</p>
                            <span class="btn btn-sm btn-outline-secondary">Learn More</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
                     <picture>
                     <source srcset="<?php echo base_url('img/construction2.jpg'); ?>" media="(min-width: 1400px)">
                     <source srcset="<?php echo base_url('img/construction2.jpg');?>" media="(min-width: 769px)">
                      <source srcset="<?php echo base_url('img/construction2.jpg');?>" media="(min-width: 577px)">
                     <img srcset="<?php echo base_url('img/construction2.jpg');?>" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Every project begins with a sketch</h2>
                            <p>We work as an extension of your business to explore solutions</p>
                            <span class="btn btn-sm btn-outline-secondary">Our Process</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
                    <picture>
                        <source srcset="<?php echo base_url('img/construction6.jpg'); ?>" media="(min-width: 1400px)">
                        <source srcset="<?php echo base_url('img/construction6.jpg');?>" media="(min-width: 769px)">
                        <source srcset="<?php echo base_url('img/construction6.jpg');?>" media="(min-width: 577px)">
                        <img srcset="<?php echo base_url('img/construction6.jpg');?>" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Performance Optimization</h2>
                            <p>We monitor and optimize your site's long-term performance</p>
                            <span class="btn btn-sm btn-secondary">Learn How</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
        </div>
        <!-- /.carousel-inner -->
        <!-- <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->
    </div>

    <!-- /.carousel -->
<!-- /.container -->


<!-- NUESTRA FIRMA -->

  <div class="row no-gutters">
    <div class="col-md-7" style="padding: 5% 5% 0% 14%">
        <h2 class="bold" style="color: red;">NUESTRA FIRMA</h2>
        <p>Código UB Constructora S.A de C.V. nace en el ramo de la industria electrónica y automotriz, construimos siempre anteponiendo los principios elementales de seguridad del personal y asegurando la operación continua de nuestro cliente, creemos que nuestra fortaleza está en el capital humano con el que contamos, más 2 millones de metros cuadrados construidos pueden confirmarlo.</p>
        <button type="button" class="btn btn-outline-dark" style="margin-right: 3vh">CONOCE MÁS</button>
    </div>
    <div class="col-md-5">
        <img class="img-fluid" src="<?php echo base_url('img/nuestrafirma.jpg')?>" alt="" style="min-height: 462px;">
    </div>
  </div>
  <div class="w-100" style="background-color: #a8a9ab; min-height: 500px;">
        <div class="container-fluid text-center" style="padding-top: 5vh">
            <h1 class="white bold" style="margin-bottom: 3vh">PROYECTOS</h1>
            <div class="mx-auto" style="width: 920px">
                <p class="white-s">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="push"></div>
                <button type="button" class="btn btn-outline-light" style="margin-right: 3vh">INDUSTRIAL</button>
                <button type="button" class="btn btn-outline-light" style="margin-right: 3vh">COMERCIAL</button>
                <button type="button" class="btn btn-outline-light">OBRA PÚBLICA</button>
            </div>
            <div class="push"></div>
                <div class="mx-auto proyectos" >
                    <div class="row no-gutters">
                        <div class="col-6"style="padding-right: 2vh">
                            <img class="img-fluid" src="<?php echo base_url('img/tunnelproject.jpg')?>" alt="" style="height: 388px">
                        </div>
                        <div class="col-6 mosaico">
                            <div class="row no-gutters" style="padding-bottom: 2vh">
                                <div class="col" style="padding-right: 1vh">
                                    <img class="img-fluid img-project" src="<?php echo base_url('img/proyect2.jpg')?>" alt="" >
                                </div>
                                <div class="col">
                                    <img class="img-fluid img-project" src="<?php echo base_url('img/project3.jpg')?>" alt="" >
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col" style="padding-right: 1vh">
                                    <img class="img-fluid img-project" src="<?php echo base_url('img/proyect4.jpg')?>" alt="" >
                                </div>
                                <div class="col">
                                    <img class="img-fluid img-project" src="<?php echo base_url('img/proyect4.jpg')?>" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="push"></div>
            <div class="push"></div>
        </div>
  </div>





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
            <a href="<?php echo base_url() ?>">01 HOME
                <span class="selector-menu"></span>
            </a>
            <a href="<?php echo base_url('firma'); ?>">02 Nuestra Firma
                <span class="selector-menu"></span>
            </a>
            <a href="<?php echo base_url('servicios'); ?>">03 Servicios
                <span class="selector-menu"></span>
            </a>
            <a href="<?php echo base_url() . 'proyectos' ?>">04 Proyectos
                <span class="selector-menu"></span>
            </a>
            <a href="<?php echo base_url() . 'contacto' ?>">05 Contacto
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
                <a href="#">
                    <!-- 
                    If you need more browser support use https://scottjehl.github.io/picturefill/
                    If a picture looks blurry on a retina device you can add a high resolution like this
                    <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">

                    What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                     -->
                     <picture>
                      <source srcset="<?php echo base_url('assets/images/PH01.jpg'); ?>" media="(min-width: 1400px)">
                      <source srcset="<?php echo base_url('assets/images/PH01.jpg');?>" media="(min-width: 769px)">
                       <source srcset="<?php echo base_url('assets/images/PH01.jpg');?>" media="(min-width: 577px)">
                      <img srcset="<?php echo base_url('assets/images/PH01.jpg');?>" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div>
                            <h2>Comprometidos con la construcción</h2>
                            <p>Cuidamos cada detalle durante la construcción de las obras</p>
                            <span class="btn btn-sm btn-outline-secondary" style="display: none">Learn More</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="#">
                     <picture>
                     <source srcset="<?php echo base_url('assets/images/PH02.jpg'); ?>" media="(min-width: 1400px)">
                     <source srcset="<?php echo base_url('assets/images/PH02.jpg');?>" media="(min-width: 769px)">
                      <source srcset="<?php echo base_url('assets/images/PH02.jpg');?>" media="(min-width: 577px)">
                     <img srcset="<?php echo base_url('assets/images/PH02.jpg');?>" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Le damos valor a sus proyectos</h2>
                            <p>We work as an extension of your business to explore solutions</p>
                            <span class="btn btn-sm btn-outline-secondary" style="display: none">Our Process</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="#">
                    <picture>
                        <source srcset="<?php echo base_url('assets/images/PH03.jpg'); ?>" media="(min-width: 1400px)">
                        <source srcset="<?php echo base_url('assets/images/PH03.jpg');?>" media="(min-width: 769px)">
                        <source srcset="<?php echo base_url('assets/images/PH03.jpg');?>" media="(min-width: 577px)">
                        <img srcset="<?php echo base_url('assets/images/PH03.jpg');?>" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>La seguridad y calidad siempre serán lo primero</h2>
                            <p>We monitor and optimize your site's long-term performance</p>
                            <span class="btn btn-sm btn-secondary" style="display: none">Learn How</span>
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
        <p>Código UB Constructora nace en el ramo de la industria electrónica y automotriz, construimos siempre anteponiendo los principios elementales de seguridad del personal y asegurando la operación continua de nuestro cliente, creemos que nuestra fortaleza está en el capital humano con el que contamos, más 2 millones de metros cuadrados construidos pueden confirmarlo.</p>
        <a class="btn btn-outline-dark" style="margin-right: 3vh" href="<?php echo base_url('firma'); ?>">CONOCE MÁS</a>
        <div class="push"></div>
    </div>
    <div class="col-md-5 firma_main">
        <!-- <img class="img-fluid" src="<?php echo base_url('assets/images/nuestra_firma_home.png')?>" alt="" style="min-height: 462px;"> -->
    </div>
  </div>
  <div class="w-100" style="background-color: #a8a9ab; min-height: 500px;">
        <div class="container-fluid text-center" style="padding-top: 5vh">
            <h1 class="white bold" style="margin-bottom: 3vh">PROYECTOS</h1>
            <div class="mx-auto" style="width: 920px">
                <p class="white-s">
                    Cada proyecto con el que nos comprometemos lo desarrollamos con pasión, entrega y una gran responsabilidad, vivimos de ellos y queremos sentirnos orgullosos
                    cada vez que pasemos frente a ellos. Razón por la cual no podemos fallar.
                </p>
                <div class="push"></div>

                <div class="d-block text-center">
                    <button id="post-todos" type="submit" class="active btn btn-outline-gray spacingbtn">TODOS</button>
                    <?php foreach($categorias as $categoria):?>
                            <button  id="<?php echo $categoria['id'];?>" type="button" class="btn btn-outline-gray catbuttons spacingbtn"><?php echo $categoria['nombre']; ?></button>
                    <?php endforeach;?>
                    <script>
                $('.catbuttons').click(function(){
                $('.btn-outline-gray').removeClass('active');
                $(this).addClass('active');  
                });

                $(document).ready(function(){
                    $('.catbuttons').click(function(){
                        console.log($(this).attr('id'));
                        var catId = $(this).attr('id');
                        $.ajax({
                            type: "GET",
                            dataType: 'html',
                            url: "<?php echo base_url('pages/categoria/')?>" + catId,
                           
                            success: function(data) 
                            {
                                $('.ajax-container').fadeIn().html(data);
                            }
                        });


                        $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-top', '10px')});
                    $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-bottom', '10px')});

                    });
                });

                $(document).ready(function(){
                    ajax_posts_all();
                    $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-top', '10px')});
                    $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-bottom', '10px')});

                });

                function ajax_posts_all(){
                    $('#post-todos').click(function(){
                        
                        $('.btn-outline-gray').removeClass('active');
                        $(this).addClass('active');  
                        $.ajax({
                            type: "GET",
                            dataType: 'html',
                            url: "<?php echo base_url('pages/proyectos_all')?>",
                           
                            success: function(data) 
                            {
                                $('.ajax-container').fadeIn().html(data);
                            }
                        });
                    });
                    $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-top', '10px')});
                    $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-bottom', '10px')});

                  

                }

        </script>
                </div>
            </div>
            <div class="push"></div>


                <div class="mx-auto proyectos" >
                    <!-- <div class="row no-gutters">
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
                    </div> -->
                    <?php $this->load->view('templates/proyectos_even.php'); ?>
                </div>
            <div class="push"></div>
            <div class="push"></div>
        </div>
        <div class="container">
            <div class="row text-center" style="display: inherit">
                <a class="white" href="<?php echo base_url('proyectos')?>">Ver más</a>
            </div>
        </div>
        <div class="push"></div>
  </div>




<div class="wrapper2">
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
             <div class="img-holder">
                <img src="<?php echo base_url('assets/images/proyectos/images/Web_Codigo-UB-Proyectos_02.png');?>" class="img-fluid" alt="Responsive image">
                <div class="caption">
                    <h1 class="white bold text-center" style="letter-spacing: 4px;">PROYECTOS</h1>
                    <p class="white text-center" style="letter-spacing: 11px">| NUESTRA EXPERIENCIA |</p>
                </div>
             </div>
</div>

<div class="container-fluid" style="padding: 3% 15% 3% 15%">
    <h1 class="bold red text-center">PROYECTOS</h1>
    <div class="push"></div>
    <p class="gray text-center">
    Cada proyecto con el que nos comprometemos lo desarrollamos con pasión, entrega y una gran responsabilidad, vivimos de ellos y queremos sentirnos orgullosos cada vez que pasemos frente a ellos. Razón por la cual no podemos fallar.
    </p>
</div>

<div class="container">
    <div class="d-block text-center">
            <button id="post-todos" type="submit" class="active btn btn-outline-redblack spacingbtn">TODOS</button>
        <?php foreach($categorias as $categoria):?>
                <button  id="<?php echo $categoria['id'];?>" type="button" class="btn btn-outline-redblack catbuttons spacingbtn"><?php echo $categoria['nombre']; ?></button>
        <?php endforeach;?>
        <script>
                $('.catbuttons').click(function(){
                $('.btn-outline-redblack').removeClass('active');
                $(this).addClass('active');  
                });

                $(document).ready(function(){
                    $('.catbuttons').click(function(){
                        console.log($(this).attr('id'));
                        var catId = $(this).attr('id');
                        $.ajax({
                            type: "GET",
                            dataType: 'html',
                            url: "<?php echo base_url('proyectos/categoria/')?>" + catId,
                           
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
                        
                        $('.btn-outline-redblack').removeClass('active');
                        $(this).addClass('active');  
                        $.ajax({
                            type: "GET",
                            dataType: 'html',
                            url: "<?php echo base_url('posts/proyectos_all')?>",
                           
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
    <div class="push"></div>
    <div class="push"></div>
    <?php 
        $this->load->view('templates/proyectos_even.php');
    ?>
</div>

<div class="push"></div>
<div class="push"></div>


    <!-- por cada post tengo que desplegar su imagen y cada cinco posts se cambio de row -->





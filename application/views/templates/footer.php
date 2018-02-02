<footer>
      <div class="full-width-image">
        <div class="mx-auto footarea">
          <div class="row no-gutters">
            <div class="col-3">
              <h1 class="white" style="font-size: 24px">Nuestra firma</h1><br>
              <p class="gray" style="margin-bottom: 0">CÓDIGO UB</p>
              <small class="gray" style="position: relative;top: -8px;">Constructora</small>
              <div class="push d-none d-sm-block"></div>
              <p class="white">
                Código UB Constructora S.A de C.V.
                es una empresa dedicada y comprometida con la construcción, que cuenta con personal con amplia experiencia.
              </p>
            </div>
            <div class="col-6 text-center middlefooter">
              <div class="form-inline" style="display: inherit">
                <a href="<?php echo base_url();?>">Home</a><span>|</span><a href="<?php echo base_url('firma');?>">Nuestra Firma</a><span>|</span><a href="<?php echo base_url('servicios');?>">Servicios</a><span>|</span><a href="<?php echo base_url('proyectos');?>">Proyectos</a><span>|</span><a href="<?php echo base_url('contacto');?>">Contacto</a>
              </div>
              <div class="push"></div>
              <div class="form-inline" style="display: inherit">
                <a href="#">
                  <img src="<?php echo base_url('img/fb2.png'); ?>" /> 
                </a>
                <a href="#">
                  <img src="<?php echo base_url('img/twitter.png'); ?>" /> 
                </a>
                <a href="#">
                  <img src="<?php echo base_url('img/linkedin2.png'); ?>" /> 
                </a>
                <a href="#">
                  <img src="<?php echo base_url('img/google-plus2.png'); ?>" /> 
                </a>
                <a href="#">
                  <img src="<?php echo base_url('img/youtube2.png'); ?>" /> 
                </a>
              </div>
            </div>
            <div class="col-3">
            <h1 class="white" style="font-size: 24px;">Contacto</h1><br> 
                <span><img style="width: 6%"src="<?php echo base_url('img/mark2.png') ?>" alt=""> Guadalajara, Jalisco</span>
                <div class="push"></div>
                <span><img style="width: 6%"src="<?php echo base_url('img/envelope.png') ?>" alt="">ventas@codigoub.com.mx</span>
                <div class="push"></div>               
                <span><img style="width: 6%"src="<?php echo base_url('img/phoneicon.png') ?>" alt="">33 36 13 89 23</span>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="d-flex justify-content-center lastfooter">
        <span style="margin-top: 5vh">Copyright &copy 2017</span>
      </div> -->
</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('js/custom.js');?>"></script> 
    <script>
			CKEDITOR.replace( 'editor1' );
    </script>
    
  <script>
      $(document).ready(function(){
          $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-top', '5px')});
          $('.mosaico').children().find('.col-6').each(function(){$(this).css('margin-bottom', '5px')});


          //remove active when clicked on button 



      });
  </script>




  
</body>
</html>
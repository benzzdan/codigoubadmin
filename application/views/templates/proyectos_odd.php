<div class="row" style="margin-bottom: 5px;">
        <div class="col-6 nopad">
            <div class="row no-gutters">
                <?php for($i = 1; $i <= 2; $i++){ ?> 
                    <div class="col-6 nopad" style="padding-right: 5px">
                        <img class="img-proyectos img-fluid" src="<?php echo base_url('uploads/') . $images[$i] ;?>" alt="">
                    </div>
                <?php  } ?>
            </div>
           
            <div class="row no-gutters" style="margin-top: 10px">
                <?php for($i = 3; $i <= 4; $i++){ ?> 
                        <div class="col-6 nopad" style="padding-right: 5px">
                            <img class="img-proyectos img-fluid" src="<?php echo base_url('uploads/') . $images[$i] ;?>" alt="">
                        </div>
                    <?php  } ?>
            </div>
        </div>
        <div class="col-6 nopad">
            <img class="img-proyectos img-fluid" src="<?php echo base_url('uploads/') . $images[0] ;?>" alt="">
        </div>
    </div>
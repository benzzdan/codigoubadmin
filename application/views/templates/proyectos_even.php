
<div class="ajax-container">
            <?php 
            $nPosts = count($posts);

            $flip = false;



            // empieza el mosaico
            for($i=0; $i < $nPosts; $i ++){

              
               
                if($i % 5 == 0){ 
                    //se pone post[0]
                    ?>
                <div class="row">
                    <?php  if($flip){?>
                        <div class="col-6 mosaico" style="min-width: 570px; min-height: 450px;">
                            <div class="row">
                                <?php 
                                //empezar desde el post[1]
                                for($b = $i+1; $b <= $i+4; $b++){
                                    if(empty($posts[$b])){
                                        break;

                                    }
                                    $image_name = $this->image_model->getImages($posts[$b]['id']);

                                    ?>
                                        <div class="col-6">
                                                <div class="box">
                                                <div class="screen mx-auto text-center" style="width: 100%">
                                                <p class="caption"><?php echo $posts[$b]['titulo'];?></p>
                                                <p class="small">| CÓDIGO UB |</p>
                                                <a class="btn btn-outline-secondary leer-mas" href="#">Conoce más</a>
                                            </div>
                                                    <img class="item img-proyectos img-fluid" src="<?php echo base_url('uploads/' . $image_name[0]['nombre']);?>" alt="">
                                                </div>
                                        </div>
                                <?php
                                }

                                ?>
                            </div>

                        </div>
                        <div class="col-6 mosaico-grande" style="min-width: 570px; min-height: 450px;">
                            <?php $image_name = $this->image_model->getImages($posts[$i]['id']); ?>
                                    <div class="box">
                                        <div class="screen mx-auto text-center" style="width: 100%">
                                            <p class="caption"><?php echo $posts[$i]['titulo'];?></p>
                                            <p class="small">| CÓDIGO UB |</p>
                                            <a class="btn btn-outline-secondary leer-mas" href="#">Conoce más</a>
                                        </div>
                                    <img class="item img-proyectos img-fluid w-100" src="<?php echo base_url('uploads/' . $image_name[0]['nombre']);?>" alt="">
                                    </div>
                                </div>
                    <?php }else{?>
                        <div class="col-6 mosaico-grande" style="min-width: 570px; min-height: 450px;">
                            <?php $image_name = $this->image_model->getImages($posts[$i]['id']); ?>
                            <div class="box">
                                <div class="screen mx-auto text-center" style="width: 100%">
                                    <p class="caption"><?php echo $posts[$i]['titulo'];?></p>
                                    <p class="small">| CÓDIGO UB |</p>
                                    <a class="btn btn-outline-secondary leer-mas" href="#">Conoce más</a>
                                </div>
                            <img class="item img-proyectos item img-fluid w-100" src="<?php echo base_url('uploads/' . $image_name[0]['nombre']);?>" alt="">
                            </div>
                          
                        </div>
                        <div class="col-6 mosaico" style="min-width: 570px; min-height: 450px;">
                            <div class="row">
                                <?php 
                                //empezar desde el post[1]
                                for($b = $i+1; $b <= $i+4; $b++){
                                    if(empty($posts[$b])){
                                        break;
    
                                    }
                                    $image_name = $this->image_model->getImages($posts[$b]['id']);
    
                                    ?>
                                    <div class="col-6">
                                      
                                        <div class="box">
                                            <div class="screen mx-auto text-center" style="width: 100%">
                                                <p class="caption"><?php echo $posts[$b]['titulo'];?></p>
                                                <p class="small">| CÓDIGO UB |</p>
                                                <a class="btn btn-outline-secondary leer-mas" href="#">Conoce más</a>
                                            </div>
                                            <img class="item img-proyectos img-fluid" src="<?php echo base_url('uploads/' . $image_name[0]['nombre']);?>" alt="">
                                        </div>
                                    </div>
                                <?php
                                }
    
                                ?>
                            </div>
    
                        </div>
                    <?php }?>
                </div>
            <?php
                }
                $flip = !$flip;
            }
            ?>
</div>




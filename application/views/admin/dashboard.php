<?php if($this->session->flashdata('cat_add')): ?>
    <div class="row text-center">
        <?php echo '<div class="alert alert-success  mx-auto" style="width: 900px;margin-top: 5vh">' . $this->session->flashdata('cat_add') . '</div>';?>
    </div>
    <?php endif ?>

    <?php if($this->session->flashdata('del_cat')): ?>
    <div class="row text-center">
        <?php echo '<div class="alert alert-success  mx-auto" style="width: 900px;margin-top: 5vh">' . $this->session->flashdata('del_cat') . '</div>';?>
    </div>
    <?php endif ?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="<?php echo base_url()?>js/modernizr.custom.js"></script>


</head>

<div class="col-md-3">
    <div id="dl-menu" class="dl-menuwrapper">
        <button class="dl-trigger">Open Menu</button>
        <ul class="dl-menu">

                                        <li><a href="<?php echo base_url()?>Portfolio">Portfolio</a></li>
            <!--                            <li><a href="--><?php //echo base_url()?><!--About_us">about_us</a></li>-->

            <?php foreach ($menu as $m){?>
                <li>
                <?php if($m->parentId == 0 && $m->level == 0){
                    $id=$m->menuId?>
                    <a href="<?php echo base_url()?>Pages/show_page/<?php echo $m->menuId?>"><?php echo $m->menuName?></a>

                    <?php
                    $query2 = $this->db->query("SELECT * FROM `menu` WHERE  `parentId` ='$id'");
                    if ($query2->num_rows() > 0) {
                        ?>

                        <ul class="dl-submenu">
                            <?php foreach ($menu as $m){
                            $query = $this->db->query("SELECT * FROM `menu` WHERE  `menuId` ='$id'");
                            foreach ($query->result() as $q) {
                                $menu_id = $q->menuId;
                            }
                            if ($m->parentId == $menu_id){ ?>

                            <li>
                                <a href="<?php echo base_url()?>Pages/show_page/<?php echo $m->menuId?>"><?php echo $m->menuName;
                                    }
                                    } ?></a>
                            </li>
                        </ul>
                        <?php
                    }
                    ?>
                    </li>
                <?php } } ?>

        </ul>
    </div><!-- /dl-menuwrapper -->
</div><br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="<?php echo base_url()?>js/jquery.dlmenu.js"></script>
<script>
    $(function() {
        $( '#dl-menu' ).dlmenu({
            animationClasses : { classin : 'dl-animate-in-3', classout : 'dl-animate-out-3' }
        });
    });
</script>
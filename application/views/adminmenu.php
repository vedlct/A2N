
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a href="<?php echo base_url()?>Home" class="navbar-brand" href="index.html">A2N Admin</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">

    <li class="dropdown">

        <?php
        $id = $this->session->userdata('id');
        $query=$this->db->query("SELECT CONCAT(`first_name`,' ', `last_name`) AS name FROM `login` WHERE `login_id`='$id'");

        foreach ($query->result() as $r){

            $insertby_name=$r->name;
        }
        ?>


        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $insertby_name?> <b class="caret"></b></a>
        <ul class="dropdown-menu">

            <li>
                <a href="<?php echo base_url()?>Admin/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>

    </li>
</ul>
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">

        <li>
            <a href="<?php echo base_url()?>Admin_Home"></i> Home</a>
        </li>
        <li >
            <a href="<?php echo base_url()?>Menu/"></i> Menu</a>
        </li>

        <li >
            <a href="<?php echo base_url()?>User/get_user_admin">User</a>
        </li>
<!--        <li >-->
<!--            <a href="--><?php //echo base_url()?><!--About_us/about_us_page">About Us</a>-->
<!--        </li>-->

        <li >

            <a href="<?php echo base_url()?>Service/service_page_admin">Service</a>

        </li>

        <li >

            <a href="<?php echo base_url()?>Project/project_page_admin">Project</a>

        </li>
        <li >

            <a href="<?php echo base_url()?>Pages/admin_pages">Pages</a>

        </li>
<!--        <li  >-->
<!--            <a href="javascript:;"  data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> User <i class="fa fa-fw fa-caret-down"></i></a>-->
<!--            <ul id="demo" class="collapse">-->
<!--                <li>-->
<!--                    <a href="--><?php //echo base_url()?><!--User/get_user_admin">Edit User</a>-->
<!--                </li>-->
<!--                -->
<!--            </ul>-->
<!---->
<!--        </li>-->

    </ul>

</div>

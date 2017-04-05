
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a href="<?php echo base_url()?>Home" class="navbar-brand" href="index.html">RAK's Kitchen Admin</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">

    <li class="dropdown">
        <?php if($this->session->userdata('loggedin')=="true"){
        $username=$this->session->userdata('username');
        $usertype=$this->session->userdata('type');
        if($usertype=="Admin"){

        ?>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
        <ul class="dropdown-menu">

            <li>
                <a href="<?php echo base_url()?>Home/Logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>
        <?php }elseif ($usertype=="Res"){?>

        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $username?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="<?php echo base_url()?>Res_Admin_Home"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>

            <li class="divider"></li>
            <li>
                <a href="<?php echo base_url()?>Home/Logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>
<?php } }?>

    </li>
</ul>
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <?php if($this->session->userdata('loggedin')=="true"){
        $username=$this->session->userdata('username');
        $usertype=$this->session->userdata('type');
        if($usertype=="Admin"){

        ?>

        <li  class="active">
            <a href="<?php echo base_url()?>Admin_Home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Admin_Faq"><i class="fa fa-fw fa-bar-chart-o"></i> FAQ</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Admin_contact"><i class="fa fa-fw fa-table"></i> Contact</a>
        </li>
        <li>
            <a href="<?php echo base_url()?>Admin_aboutus"><i class="fa fa-fw fa-edit"></i> About Us</a>
        </li>
        <li>

            <a href="javascript:;" data-toggle="collapse" data-target="#dropdown"><i class="fa fa-fw fa-arrows-v"></i> Restaurant <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="dropdown" class="collapse">
                <li>
                    <a href="<?php echo base_url()?>Admin_Restaurant">Restaurant</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Admin_Res_Details">Add Restaurant Details</a>
                </li>

            </ul>

        </li>

        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Menu <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse">
                <li>
                    <a href="<?php echo base_url()?>Admin_menu/insert_menu_type">Add Menu Type</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Admin_menu">Menu</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Restaurant_menu">Restaurant Menu</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Admin_menu_attribute">Admin Menu Attribute</a>
                </li>

            </ul>

        </li>

        <li>
            <a href="<?php echo base_url()?>Order"><i class="fa fa-fw fa-wrench"></i>Order</a>
        </li>
            <li>
                <a href="<?php echo base_url()?>Report"><i class="fa fa-fw fa-wrench"></i>Sales Report</a>
            </li>




    <?php }}?>

    </ul>

</div>

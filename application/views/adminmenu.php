
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

        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username')?> <b class="caret"></b></a>
        <ul class="dropdown-menu">

            <li>
                <a href="<?php echo base_url()?>Admin/Logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
        </ul>

    </li>
</ul>
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">


        <li class="active">
            <a href="<?php echo base_url()?>Admin_Home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
        </li>

    </ul>

</div>

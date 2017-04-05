<!DOCTYPE html>
<html lang="en">

<head>


    <?php $this->load->view('head');?>
    <?php $this->load->view('admin_head');?>


</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
     <?php $this->load->view('adminmenu');?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Home Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Main Content</h3></div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_Home/insert_main_content">






                                        <div class="form-group">
                                            <label>Main Content Big</label>
                                            <input class="form-control" type="text" name="main_content_big" value="" >

                                        </div>

                                        <div class="form-group summer">
                                            <label>Main Content Small</label>

                                            <textarea id="summernote" class="form-control"  name="main_content_small" value="" ></textarea>
                                        </div>
                                        <input type="hidden" name="" value="?>">
                                        <input class="btn btn-success" type="submit">

                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Section two Content And More</h3></div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_Home/insert_resturant_content">

                                    <div class="form-group">
                                        <label>Resturant Content</label>
                                        <input class="form-control" type="text" name="resturant1">
                                    </div>
                                    <div class="form-group">
                                        <label>People Served</label>
                                        <input class="form-control"type="text" name="resturant2">
                                    </div>
                                    <div class="form-group">
                                        <label>Register User</label>
                                        <input class="form-control" type="text" name="resturant3">
                                    </div>
                                    <input type="hidden" name="" value="">
                                    <input class="btn btn-success" type="submit">




                            </form>
                        </div>
                    </div>
                </div>

            </div>




            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Sextion four Content And More</h3></div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_Home/insert_section_four">


                                        <div class="form-group">
                                            <label>Section four Big</label>
                                            <input class="form-control" type="text" name="sfourbig" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Section four Small</label>
                                            <input class="form-control" type="text" name="sfoursmall" value="">
                                        </div>
                                        <input type="hidden" name="" value="">
                                        <input class="btn btn-success" type="submit">
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Section five Content And More</h3></div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin_Home/insert_section_five" enctype="multipart/form-data">




                                        <div class="form-group">
                                            <label>Section five Big</label>
                                            <input class="form-control" type="text" name="sfivebig" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Section five Small</label>
                                            <input class="form-control" type="text" name="sfivesmall" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Section Five Image</label>
                                            <input class="form-control" type="file" name="sfiveimage" value="">
                                        </div>
                                        <input type="hidden" name="" value="">
                                        <input class="btn btn-success" type="submit">

                            </form>
                        </div>
                    </div>
                </div>

            </div>



        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>

</body>

</html>

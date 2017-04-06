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
                            <form method="post" action="<?php echo base_url()?>Menu/insert_menu">

                                <?php foreach ($name as $u){?>
                                <div class="form-group">
                                <label>Menu Name</label>
                                <input class="form-control" type="text" name="menuname" value="" >
                                </div>
                                <div class="form-group">
                                    <label>Parent ID</label>
                                    <input class="form-control" type="text" name="parent_id" value="" >
                                </div>
                                <div class="form-group">
                                    <label>Details</label>
                                    <textarea class="form-control" id="summernote" type="text" name="details"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Insert By</label>
                                    <input class="form-control" type="text" name="insertby" value="<?php echo $u->name?>" readonly>
                                </div>

<!--                                    <input type="hidden" id="order_time" name="order_time" class="form-control" placeholder="Order Time"  value="--><?php //echo  date("h:i:sa");?><!--" readonly>-->
<!--                                    <input type="hidden" id="date" name="date" class="form-control" placeholder="Date"  value="--><?php //echo  date("Y-m-d");?><!--" readonly-->
<!--                                <div class="form-group">-->
<!--                                    <label>Insert Time</label>-->
<!--                                    <input class="form-control" type="text" name="details" value="" >-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <label>Type</label>-->
<!--                                    <input class="form-control" type="text" name="type" value="" >-->
<!--                                </div>-->


                                <input type="hidden" name="id" value="">
                                <input class="btn btn-success" type="submit">
                                <?php }?>
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

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>



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
            <!-- Start Head Section -->
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Header</h3></div>
                        <div class="panel-body">

<!--                            <div style="float: right;>-->
<!--                                <a href="#"> <button class="btn btn-success" onclick="selectid2(this)">Add New</button></a><br><br>-->
<!--                        </div>-->

                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th style="width: 85%">Head</th>
                                <th >Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td></td>

                                <td style="text-align: center"><button class="btn btn-warning" data-panel-id="" onclick="selectid1(this)">Edit</button>
<!--                                <button class="btn btn-danger" type="submit" formaction="--><?php //echo base_url()?><!--Delete/delete_res_menu/">Delete</button>-->
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        </div>
                    </div>
                </div>

            </div>


            <!-- end Header Section -->
            <!-- Start Services Section -->


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Services Header</h3></div>
                        <div class="panel-body">

                            <form method="post" action="">

                                    <div class="form-group " >
<!--                                        <label>Services Header</label>-->
<!--                                        <input class="form-control " type="text" name="services_header">-->
                                        <textarea class="form-control" id="summernote1" type="text" name="services_header"></textarea>
                                    </div>
                                        <input  class="btn btn-success " type="submit">

                            </form>

                        </div>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Services</h3></div>
                        <div class="panel-body">

                            <div style="float: right;>
                                <a href="#"> <button class="btn btn-success" onclick="selectid2(this)">Add New</button></a><br><br>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th style="width: 10%;">Design Class</th>
                                <th style="width: 50%;">Details</th>
                                <th style="width: 20%;">Image</th>
                                <th style="width: 20%;" >Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td style="text-align: center"><button class="btn btn-warning" data-panel-id="" onclick="selectid3(this)">Edit</button>
                                <button class="btn btn-danger" type="submit" >Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>


                        </div>
                    </div>
                </div>

            </div>
        <!-- end Services Section -->
<!-- Start Project Section-->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Project Header</h3></div>
                        <div class="panel-body">
                            <form method="post" action="">

                                <div class="form-group " >
                                    <!--                                        <label>Services Header</label>-->
                                    <!--                                        <input class="form-control " type="text" name="services_header">-->
                                    <textarea class="form-control" id="summernote2" type="text" name="project_header"></textarea>
                                </div>
                                <input  class="btn btn-success " type="submit">

                            </form>
                        </div>
                    </div>
                </div>

            </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3>Projects</h3></div>
                    <div class="panel-body">


                        <div style="float: right;>
                                <a href="#"> <button class="btn btn-success" onclick="selectid4(this)">Add New</button></a><br><br>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                        <tr>

                            <th style="width: 40%;">Image</th>
                            <th style="width: 20%;">Design Class</th>

                            <th style="width: 40%;" >Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>


                            <td style="text-align: center"><button class="btn btn-warning" data-panel-id="" onclick="selectid5(this)">Edit</button>
                                <button class="btn btn-danger" type="submit" >Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>


                    </div>
                </div>
            </div>

        </div>


        <div id="myModal3" class="modal">
            <br/><br/><br/>
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">×</span>

                <h2>Edit Content</h2>
                <div id="txtHint"></div>

            </div>


        </div>
        <!--modal end-->


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>

<script>


    // Get the modal

    var modal3 = document.getElementById('myModal3');
    var span = document.getElementsByClassName("close")[0];

    function selectid1(x) {
        modal3.style.display = "block";
        //btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Home/showedit/")?>',
            data:{},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }

    function selectid2(x) {
        modal3.style.display = "block";
        //btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Home/add_services/")?>',
            data:{},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }

    function selectid3(x) {
        modal3.style.display = "block";
        //btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Home/showedit_services/")?>',
            data:{},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }

    function selectid4(x) {
        modal3.style.display = "block";
        //btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Home/add_new_projects/")?>',
            data:{},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }

    function selectid5(x) {
        modal3.style.display = "block";
        //btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Home/showedit_projects/")?>',
            data:{},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }

    //when click on close button close modal
    span.onclick = function() {
        modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }

</script>
<!-- summer note-->
<script>
    $(document).ready(function() {
        $('#summernote1').summernote();
    });

    $(document).ready(function() {
        $('#summernote2').summernote();
    });
</script>
<!-- end summer note -->
</body>

</html>

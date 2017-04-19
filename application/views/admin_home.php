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
            <!-- Start Head Section -->
            <div class="row">
                <div class="col-md-12">


                    <div class="panel-group" id="designhead">
                        <div class="panel panel-default">
                            <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">
                                <h4 class="panel-title">
                                    <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#designhead"
                                       href="#designheadh">Header<i class="indicator arrow_carrot-down_alt pull-right"></i></a>
                                </h4>
                            </div>
                            <div id="designheadh" class="panel-collapse collapse">
                                <div class="panel-body">

                                    <?php if ($this->data['design_head']!=null){ ?>

                                        <!--                            <div style="float: right;>-->
                                        <!--                                <a href="#"> <button class="btn btn-success" onclick="selectid6(this)">Add New</button></a><br><br>-->
                                        <!--                        </div>-->

                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                            <tr>

                                                <th style="width: 85%">Head</th>
                                                <th >Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <?php foreach ($this->data['design_head'] as $head){ ?>
                                                    <td><?php echo $head->details?></td>

                                                    <td style="text-align: center"><button class="btn btn-warning" data-panel-id="<?php echo $head->design_page_id ?>" onclick="selectid1(this)">Edit</button>
                                                        <!--                                <button class="btn btn-danger" type="submit" formaction="--><?php //echo base_url()?><!--Delete/delete_res_menu/">Delete</button>-->
                                                    </td>
                                                <?php } ?>
                                            </tr>
                                            </tbody>
                                        </table>
                                    <?php }elseif($this->data['design_head']==null){?>

                                    <div style="float: right;>
                                      <a href="#"> <button class="btn btn-success" onclick="selectid6(this)">Add New</button></a><br><br>
                                </div>

                                <table class="table table-bordered table-responsive">
                                    <thead>
                                    <tr>

                                        <th style="width: 85%">Head</th>
                                        <th >Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <?php foreach ($this->data['design_head'] as $head){ ?>
                                            <td><?php echo $head->details?></td>

                                            <td style="text-align: center"><button class="btn btn-warning" data-panel-id="<?php echo $head->design_page_id ?>" onclick="selectid1(this)">Edit</button>
                                                <!--                                <button class="btn btn-danger" type="submit" formaction="--><?php //echo base_url()?><!--Delete/delete_res_menu/">Delete</button>-->
                                            </td>
                                        <?php } ?>
                                    </tr>
                                    </tbody>
                                </table>
                                <?php } ?>


                                </div>
                            </div>
                        </div>
                    </div><!-- End panel-group -->





<!--                    <div class="panel panel-success ">-->
<!--                        <div class="panel-heading"><h3>Header</h3></div>-->
<!--                        <div class="panel-body">-->
<!---->
<!--                            --><?php //if ($this->data['design_head']!=null){ ?>
<!---->
<!---->
<!---->
<!--                        <table class="table table-bordered table-responsive">-->
<!--                            <thead>-->
<!--                            <tr>-->
<!---->
<!--                                <th style="width: 85%">Head</th>-->
<!--                                <th >Action</th>-->
<!--                            </tr>-->
<!--                            </thead>-->
<!---->
<!--                            <tbody>-->
<!--                            <tr>-->
<!--                                --><?php //foreach ($this->data['design_head'] as $head){ ?>
<!--                                <td>--><?php //echo $head->details?><!--</td>-->
<!---->
<!--                                <td style="text-align: center"><button class="btn btn-warning" data-panel-id="--><?php //echo $head->design_page_id ?><!--" onclick="selectid1(this)">Edit</button>-->
<!---->
<!--                                </td>-->
<!--                                --><?php //} ?>
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                            --><?php //}elseif($this->data['design_head']==null){?>
<!---->
<!--                                  <div style="float: right;>-->
<!--                                      <a href="#"> <button class="btn btn-success" onclick="selectid6(this)">Add New</button></a><br><br>-->
<!--                              </div>-->
<!---->
<!--                            <table class="table table-bordered table-responsive">-->
<!--                                <thead>-->
<!--                                <tr>-->
<!---->
<!--                                    <th style="width: 85%">Head</th>-->
<!--                                    <th >Action</th>-->
<!--                                </tr>-->
<!--                                </thead>-->
<!---->
<!--                                <tbody>-->
<!--                                <tr>-->
<!--                                    --><?php //foreach ($this->data['design_head'] as $head){ ?>
<!--                                        <td>--><?php //echo $head->details?><!--</td>-->
<!---->
<!--                                        <td style="text-align: center"><button class="btn btn-warning" data-panel-id="--><?php //echo $head->design_page_id ?><!--" onclick="selectid1(this)">Edit</button>-->
<!---->
<!--                                        </td>-->
<!--                                    --><?php //} ?>
<!--                                </tr>-->
<!--                                </tbody>-->
<!--                            </table>-->
<!--                            --><?php //}?>
<!---->
<!---->
<!--                        </div>-->
<!--                    </div>-->
                </div>

            </div>


            <!-- end Header Section -->
            <!-- Start Services Section -->


            <div class="row">
                <div class="col-md-12">



                    <div class="panel-group" id="serviceh">
                        <div class="panel panel-default">
                            <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">
                                <h4 class="panel-title">
                                    <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#serviceh"
                                       href="#servicehead">Services Header<i class="indicator arrow_carrot-down_alt pull-right"></i></a>
                                </h4>
                            </div>
                            <div id="servicehead" class="panel-collapse collapse">
                                <div class="panel-body">




                                    <form method="post" action="Admin_Home/service_header">

                                        <div class="form-group " >
                                            <?php foreach ($this->data['service_head'] as $head){ ?>
                                            <!--                                        <label>Services Header</label>-->
                                            <!--                                        <input class="form-control " type="text" name="services_header">-->
                                            <textarea class="form-control" id="summernote1" type="text" name="services_header"><?php echo $head->name ?></textarea>
                                        </div>
                                        <input  class="btn btn-success " type="submit">

                                        <?php } ?>

                                    </form>







                                </div>
                            </div>
                        </div>
                    </div><!-- End panel-group -->



<!--                    <div class="panel panel-success">-->
<!--                        <div class="panel-heading"><h3>Services Header</h3></div>-->
<!--                        <div class="panel-body">-->
<!---->
<!--                            <form method="post" action="Admin_Home/service_header">-->
<!---->
<!--                                    <div class="form-group " >-->
<!--                                        --><?php //foreach ($this->data['service_head'] as $head){ ?>
<!---->
<!--                                        <textarea class="form-control" id="summernote1" type="text" name="services_header">--><?php //echo $head->name ?><!--</textarea>-->
<!--                                    </div>-->
<!--                                        <input  class="btn btn-success " type="submit">-->
<!---->
<!--                                --><?php //} ?>
<!---->
<!--                            </form>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
                </div>

            </div>



            <div class="row">
                <div class="col-md-12">



                    <div class="panel-group" id="services">
                        <div class="panel panel-default">
                            <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">
                                <h4 class="panel-title">
                                    <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#services"
                                       href="#servicess">Services<i class="indicator arrow_carrot-down_alt pull-right"></i></a>
                                </h4>
                            </div>
                            <div id="servicess" class="panel-collapse collapse">
                                <div class="panel-body">


                                    <div style="float: right;>
                                <a href="#"> <button class="btn btn-success" onclick="selectid2(this)">Add New</button></a>
                                </div><br><br><br>



                                <div class="table-responsive">
                                    <table class="table table-bordered">

                                        <thead>
                                        <tr>
                                            <th style="width: 10%;">Service Name</th>

                                            <th style="width: 50%;">Details</th>
                                            <th style="width: 10%;">Design Class</th>
                                            <th style="width: 10%;">Image</th>
                                            <th style="width: 20%;" >Action</th>
                                        </tr>
                                        </thead>
                                        <?php foreach ($this->data['get_all_service'] as $services){ ?>
                                            <tbody>
                                            <tr>

                                                <td><?php echo $services->service_name ?></td>
                                                <td><?php echo $services->details?></td>
                                                <td><?php echo $services->design_class?></td>
                                                <td><img src="<?php echo base_url()?>images/<?php echo $services->image ?>" alt="service image" height="80" width="80"></td>

                                                <td style="text-align: center"><button class="btn btn-warning" data-panel-id="<?php echo $services->services_id ?>" onclick="selectid3(this)">Edit</button>
                                                    <button class="btn btn-danger" type="button" data-panel-id="<?php echo $services->services_id ?>" onclick="selectid7(this)">Delete</button>
                                                </td>

                                            </tr>
                                            </tbody>
                                        <?php } ?>
                                    </table>
                                </div>


                                </div>
                            </div>
                        </div>
                    </div><!-- End panel-group -->




<!--                    <div class="panel panel-success">-->
<!--                        <div class="panel-heading"><h3>Services</h3></div>-->
<!--                        <div class="panel-body">-->
<!---->
<!--                            <div style="float: right;>-->
<!--                                <a href="#"> <button class="btn btn-success" onclick="selectid2(this)">Add New</button></a>-->
<!--                            </div><br><br><br>-->
<!---->
<!---->
<!---->
<!--                        <div class="table-responsive">-->
<!--                        <table class="table table-bordered">-->
<!---->
<!--                            <thead>-->
<!--                            <tr>-->
<!--                                <th style="width: 10%;">Service Name</th>-->
<!---->
<!--                                <th style="width: 50%;">Details</th>-->
<!--                                <th style="width: 10%;">Design Class</th>-->
<!--                                <th style="width: 10%;">Image</th>-->
<!--                                <th style="width: 20%;" >Action</th>-->
<!--                            </tr>-->
<!--                            </thead>-->
<!--                            --><?php //foreach ($this->data['get_all_service'] as $services){ ?>
<!--                            <tbody>-->
<!--                            <tr>-->
<!---->
<!--                                <td>--><?php //echo $services->service_name ?><!--</td>-->
<!--                                <td>--><?php //echo $services->details?><!--</td>-->
<!--                                <td>--><?php //echo $services->design_class?><!--</td>-->
<!--                                <td><img src="--><?php //echo base_url()?><!--images/--><?php //echo $services->image ?><!--" alt="service image" height="80" width="80"></td>-->
<!---->
<!--                                <td style="text-align: center"><button class="btn btn-warning" data-panel-id="--><?php //echo $services->services_id ?><!--" onclick="selectid3(this)">Edit</button>-->
<!--                                <button class="btn btn-danger" type="button" data-panel-id="--><?php //echo $services->services_id ?><!--" onclick="selectid7(this)">Delete</button>-->
<!--                                </td>-->
<!---->
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                            --><?php //} ?>
<!--                        </table>-->
<!--                        </div>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
                </div>

            </div>
        <!-- end Services Section -->
<!-- Start Project Section-->
            <div class="row">
                <div class="col-md-12">


                    <div class="panel-group" id="projecth">
                        <div class="panel panel-default">
                            <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">
                                <h4 class="panel-title">
                                    <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#projecth"
                                       href="#projecthead">Project Header<i class="indicator arrow_carrot-down_alt pull-right"></i></a>
                                </h4>
                            </div>
                            <div id="projecthead" class="panel-collapse collapse">
                                <div class="panel-body">

                                    <?php foreach ($this->data['get_all_project_head'] as $project_head){ ?>
                                        <form method="post" action="Admin_Home/edit_project_head">

                                            <div class="form-group " >
                                                <!--                                        <label>Services Header</label>-->
                                                <!--                                        <input class="form-control " type="text" name="services_header">-->
                                                <textarea class="form-control" id="summernote2" type="text" name="project_header"><?php echo $project_head->name?></textarea>
                                            </div>
                                            <input  class="btn btn-success " type="submit">

                                        </form>
                                    <?php }?>


                                </div>
                            </div>
                        </div>
                    </div><!-- End panel-group -->



<!--                    <div class="panel panel-success">-->
<!--                        <div class="panel-heading"><h3>Project Header</h3></div>-->
<!--                        <div class="panel-body">-->
<!--                            --><?php //foreach ($this->data['get_all_project_head'] as $project_head){ ?>
<!--                            <form method="post" action="Admin_Home/edit_project_head">-->
<!---->
<!--                                <div class="form-group " >-->
<!---->
<!--                                    <textarea class="form-control" id="summernote2" type="text" name="project_header">--><?php //echo $project_head->name?><!--</textarea>-->
<!--                                </div>-->
<!--                                <input  class="btn btn-success " type="submit">-->
<!---->
<!--                            </form>-->
<!--                            --><?php //}?>
<!--                        </div>-->
<!--                    </div>-->
                </div>

            </div>

<!---->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!---->
<!---->
<!--                <div class="panel-group" id="projects">-->
<!--                    <div class="panel panel-default">-->
<!--                        <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">-->
<!--                            <h4 class="panel-title">-->
<!--                                <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#projects"-->
<!--                                   href="#projectss">Projects<i class="indicator arrow_carrot-down_alt pull-right"></i></a>-->
<!--                            </h4>-->
<!--                        </div>-->
<!--                        <div id="projectss" class="panel-collapse collapse">-->
<!--                            <div class="panel-body">-->
<!---->
<!---->
<!--                                <div style="float: right;>-->
<!---->
<!--                                <a href="#"> <button class="btn btn-success" onclick="selectid4(this)">Add New</button></a>-->
<!--                            </div><br><br><br>-->
<!--                            <div class="table-responsive">-->
<!--                                <table class="table table-bordered">-->
<!---->
<!--                                    <thead>-->
<!--                                    <tr>-->
<!---->
<!--                                        <th style="width: 50%; text-align: center">Image</th>-->
<!--                                        <th style="width: 30%; text-align: center">Design Class</th>-->
<!---->
<!--                                        <th style="width: 20%; text-align: center" >Action</th>-->
<!--                                    </tr>-->
<!--                                    </thead>-->
<!---->
<!--                                    <tbody>-->
<!--                                    --><?php //foreach ($project as $p){?>
<!--                                        <tr>-->
<!--                                            <td style="text-align: center"><img src="--><?php //echo base_url()?><!--images/--><?php //echo $p->image?><!--"  style="height: 300px" width="250px"></td>-->
<!--                                            <td style="text-align: center">--><?php //echo $p->design_class?><!--</td>-->
<!---->
<!---->
<!--                                            <td style="text-align: center"><button class="btn btn-warning" data-panel-id="--><?php //echo $p->id?><!--" onclick="selectid5(this)">Edit</button>-->
<!--                                                <button class="btn btn-danger" type="button" data-panel-id="--><?php //echo $p->id ?><!--" onclick="selectid8(this)">Delete</button>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                    --><?php //} ?>
<!--                                    </tbody>-->
<!--                                </table>-->
<!--                            </div>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div><!-- End panel-group -->




            </div>

        </div>


<!--modal start-->
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
        btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Home/showedit/")?>'+btn,
            data:{'id':btn},
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
        btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Home/showedit_services/")?>'+btn,
            data:{id:btn},
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
        btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Home/showedit_projects/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }
    function selectid6(x) {
        modal3.style.display = "block";
        //btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Admin_Home/add_design_header/")?>',
            data:{},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }
    function selectid7(x) {
        //modal3.style.display = "block";
        btn2 = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Delete/delete_service/")?>'+btn2,
            data:{id:btn2},
            cache: false,
            success:function(data) {
                if (data == 1) {
                    location.reload();
                    //alert(data);
                    //$('#txtHint').html(data);
                }
            }

        });
    }

    function selectid8(x) {
        //modal3.style.display = "block";
        btn3 = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Delete/delete_project/")?>'+btn3,
            data:{id:btn3},
            cache: false,
            success:function(data) {
                if (data == 1) {
                    location.reload();
                    //alert(data);
                    //$('#txtHint').html(data);
                }
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
<script>
    $(function() {

        var pgurl = window.location.href;
        //substr(window.location.href.lastIndexOf("/")+1);

        //alert(pgurl);

        $(".side-nav li").each(function(){
            //alert($('a',this).attr("href"));

            if(pgurl==''){
                // alert("hello");
                $(".side-nav li:eq(1)").addClass("active");
            }else

            // alert( substr($('a',this).attr("href").lastIndexOf("/")+1))

            if($('a',this).attr("href") == pgurl || $('a', this).attr("href") == '')
                $(this).addClass("active");
        })
    });
</script>
<!-- end summer note -->
</body>

</html>

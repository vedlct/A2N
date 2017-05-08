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



            <div class="panel-group" id="AddProjecttoHome">
                <div class="panel panel-default">
                    <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">
                        <h4 class="panel-title">
                            <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#AddProjecttoHome"
                               href="#AddProject">Add Project to Home<i class="indicator arrow_carrot-down_alt pull-right"></i></a>
                        </h4>
                    </div>
                    <div id="AddProject" class="panel-collapse collapse">
                        <div class="panel-body">






                        <div class="table-responsive">
                            <table class="table table-bordered">

                                <thead>
                                <tr>
                                    <th style="text-align: center">Project Name</th>

<!--                                    <th style="width: 50%;">Details</th>-->
<!--                                    <th style="width: 10%;">Design Class</th>-->
                                    <th style="text-align: center">Image</th>
                                    <th style="text-align: center" >Add This To Home</th>
                                </tr>
                                </thead>
                                <?php foreach ($this->data['get_all_projects'] as $projects){ ?>
                                    <tbody>
                                    <tr>

                                        <td style="text-align: center"><?php echo $projects->projectName ?></td>
<!--                                        <td>--><?php //echo $projects->details?><!--</td>-->
<!--                                        <td>--><?php //echo $projects->designClassname?><!--</td>-->
                                        <td style="text-align: center"><img src="<?php echo base_url()?>images/<?php echo $projects->imageHome ?>" alt="Project image for Home" height="150" width="150"></td>

                                        <td style="text-align: center">
<!--                                            <button class="btn btn-warning" data-panel-id="--><?php //echo $projects->projectId ?><!--" onclick="selectid3(this)">Edit</button>-->
<!--                                            <button class="btn btn-danger" type="button" data-panel-id="--><?php //echo $projects->projectId ?><!--" onclick="selectid7(this)">Delete</button>-->
                                            <input type="checkbox" name="menuadd"  data-panel-id="<?php echo $projects->projectId ?>" onclick="selectid3(this)" <?php if ($projects->status=='home') { echo 'checked'; }?> >

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



    </div>

</div>

            <div class="row">
                <div class="col-md-12">



                    <div class="panel-group" id="AddServicetoHome">
                        <div class="panel panel-default">
                            <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">
                                <h4 class="panel-title">
                                    <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#AddServicetoHome"
                                       href="#AddService">Add Service to Home<i class="indicator arrow_carrot-down_alt pull-right"></i></a>
                                </h4>
                            </div>
                            <div id="AddService" class="panel-collapse collapse">
                                <div class="panel-body">






                                    <div class="table-responsive">
                                        <table class="table table-bordered">

                                            <thead>
                                            <tr>
                                                <th style="text-align: center">Service Name</th>

                                                <!--                                    <th style="width: 50%;">Details</th>-->
                                                <!--                                    <th style="width: 10%;">Design Class</th>-->
                                                <th style="text-align: center">Image</th>
                                                <th style="text-align: center" >Add This To Home</th>
                                            </tr>
                                            </thead>
                                            <?php foreach ($this->data['get_all_services'] as $services){ ?>
                                                <tbody>
                                                <tr>

                                                    <td style="text-align: center"><?php echo $services->serviceName ?></td>
                                                    <!--                                        <td>--><?php //echo $projects->details?><!--</td>-->
                                                    <!--                                        <td>--><?php //echo $projects->designClassname?><!--</td>-->
                                                    <td style="text-align: center"><img src="<?php echo base_url()?>images/<?php echo $services->imageHome ?>" alt="Project image for Home" height="150" width="150"></td>

                                                    <td style="text-align: center">
                                                        <!--                                            <button class="btn btn-warning" data-panel-id="--><?php //echo $projects->projectId ?><!--" onclick="selectid3(this)">Edit</button>-->
                                                        <!--                                            <button class="btn btn-danger" type="button" data-panel-id="--><?php //echo $projects->projectId ?><!--" onclick="selectid7(this)">Delete</button>-->
                                                        <input type="checkbox" name="menuadd"  data-panel-id="<?php echo $services->serviceId ?>" onclick="selectid4(this)" <?php if ($services->status=='home') { echo 'checked'; }?> >

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



                </div>

            </div>




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



    function selectid3(x) {
        //modal3.style.display = "block";
        btn = $(x).data('panel-id');

        if($(x).prop('checked') === true){
            $.ajax({
                type:'POST',
                url:'<?php echo base_url("Admin_Home/add_to_home/")?>'+btn,
                data:{id:btn},
                cache: false,
                success:function(data)
                {
                    //$('#txtHint').html(data);
                    //location.reload();
                }

            });
        }else{

            $.ajax({
                type:'POST',
                url:'<?php echo base_url("Admin_Home/remove_from_home/")?>'+btn,
                data:{id:btn},
                cache: false,
                success:function(data)
                {
                    //$('#txtHint').html(data);
                    //location.reload();
                }

            });
        }
        //alert(btn);





    }

    function selectid4(x) {
        //modal3.style.display = "block";
        btn = $(x).data('panel-id');
        //alert(btn);
        if($(x).prop('checked') === true) {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("Admin_Home/add_to_home_service/")?>' + btn,
                data: {id: btn},
                cache: false,
                success: function (data) {
                    //$('#txtHint').html(data);
                }

            });
        }else{

            $.ajax({
                type:'POST',
                url:'<?php echo base_url("Admin_Home/remove_from_home_service/")?>'+btn,
                data:{id:btn},
                cache: false,
                success:function(data)
                {
                    //$('#txtHint').html(data);
                    //location.reload();
                }

            });
        }
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

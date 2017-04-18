<!DOCTYPE html>
<html lang="en">

<head>

<!--    --><?php //$this->load->view('head');?>
<!--    --><?php //$this->load->view('admin_head');?>


</head>

<body>



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

            <!-- /.row -->



            <!-- Start Head Section -->
            <div class="row">
                <div class="col-md-12">


                    <div class="panel-group" id="serviceh" >
                        <div class="panel panel-default">
                            <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">
                                <h4 class="panel-title" >
                                    <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#serviceh"
                                       href="#servicehead">Service Head  <i class="indicator arrow_carrot-down_alt pull-right"></i></a>
                                </h4>
                            </div>
                            <div id="servicehead" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php if ($this->data['service_head']!=null){?>

                                    <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid1(this)">Add New</button></a>
                                </div><br><br><br>



                                <?php foreach ($this->data['service_head'] as $service){?>
                                    <form method="post" action="<?php echo base_url()?>Service/edit_service_for_admin">

                                        <input class="form-control " type="hidden" name="service_id" value="<?php echo $service->id?> ">

                                        <div class="form-group " >
                                            <label>Service Head</label>
                                            <input class="form-control " type="text" name="service_head" value="<?php echo $service->big?> ">
                                        </div>
                                        <div class="form-group " >
                                            <label>Service details</label>
                                            <textarea class="form-control" id="summernote1" type="text" name="service_details"><?php echo $service->small?></textarea>
                                        </div>
                                        <div class="form-group " >
                                            <label>Service quote</label>
                                            <textarea class="form-control" id="summernote2" type="text" name="service_quote"><?php echo $service->quote?></textarea>
                                        </div>

                                        <input  class="btn btn-success " type="submit" value="Submit">

                                    </form>
                                <?php }?>

                                <?php }elseif($this->data['service_head']==null){?>

                                <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid1(this)">Add New</button></a>
                            </div><br><br><br>


                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>


        <!-- end Head Section -->

    <div class="row">
        <div class="col-md-12">



            <div class="panel-group" id="servicedetailsh" >
                <div class="panel panel-default">
                    <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">
                        <h4 class="panel-title" >
                            <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#servicedetailsh"
                               href="#servicedetailshead">Service Details Head  <i class="indicator arrow_carrot-down_alt pull-right"></i></a>
                        </h4>
                    </div>
                    <div id="servicedetailshead" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php if ($this->data['service_details_head']!=null){?>

                            <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid12(this)">Add New</button></a>
                        </div><br><br><br>


                        <?php foreach ($this->data['service_details_head'] as $servicedetails_head){?>
                            <form method="post" action="<?php echo base_url()?>Service/edit_service_details_head_for_admin">

                                <input class="form-control " type="hidden" name="servicedetailshead_id" value="<?php echo $servicedetails_head->id?> ">


                                <div class="form-group " >
                                    <label>Service details Header</label>
                                    <textarea class="form-control" id="summernote10" type="text" name="service_details_big"><?php echo $servicedetails_head->big?></textarea>
                                </div>


                                <input  class="btn btn-success " type="submit" value="Submit">

                            </form>
                        <?php }?>

                        <?php }elseif($this->data['service_details_head']==null){?>

                        <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid12(this)">Add New</button></a>
                    </div><br><br><br>


                    <?php }?>
                </div>
            </div>
        </div>
    </div>




</div>

        <!-- Start Project Section-->
        <div class="row">
            <div class="col-md-12">



                <div class="panel-group" id="abd" >
                    <div class="panel panel-default">
                        <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">
                            <h4 class="panel-title">
                                <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#abd"
                                   href="#abds">Service Details<i class="indicator arrow_carrot-down_alt pull-right"></i></a>
                            </h4>
                        </div>
                        <div id="abds" class="panel-collapse collapse">
                            <div class="panel-body">

                                <?php if ($this->data['service_details']!=null){ ?>

                                <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid11(this)">Add New</button></a>
                            </div><br><br><br>

                            <div class="table-responsive">
                                <table class="table table-bordered">

                                    <thead>
                                    <tr>

                                        <th >Header</th>
                                        <th >Details </th>

                                        <th style="width: 20%; text-align: center" >Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php foreach ($service_details as $sdetails){ ?>
                                        <tr>
                                            <td style="text-align: center"><?php echo $sdetails->header ?></td>
                                            <td style="text-align: center"><?php echo $sdetails->details ?></td>


                                            <td style="text-align: center"><button class="btn btn-warning" data-panel-id="<?php echo $sdetails->id ?>" onclick="selectid9(this)">Edit</button>
                                                <button class="btn btn-danger" type="button" data-panel-id="<?php echo $sdetails->id ?>" onclick="selectid10(this)">Delete</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                            <?php }else{?>

                            <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid11(this)">Add New</button></a>
                        </div><br><br><br>

                        <div class="table-responsive">
                            <table class="table table-bordered">

                                <thead>
                                <tr>

                                    <th >Header</th>
                                    <th >Details </th>

                                    <th style="width: 20%; text-align: center" >Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>




                        <?php } ?>


                    </div>
                </div>
            </div>
        </div><!-- End panel-group -->

    </div>

</div>


<div class="row">
    <div class="col-md-12">



        <div class="panel-group" id="abb" >
            <div class="panel panel-default">
                <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">
                    <h4 class="panel-title">
                        <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#abb"
                           href="#abbr">Service Banner<i class="indicator arrow_carrot-down_alt pull-right"></i></a>
                    </h4>
                </div>
                <div id="abbr" class="panel-collapse collapse">
                    <div class="panel-body">

                        <?php if ($this->data['service_banner']!=null){ ?>


                        <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid13(this)">Add New</button></a>
                    </div><br><br><br>

                    <?php foreach ($this->data['service_banner'] as $service){?>
                        <form method="post" action="<?php echo base_url()?>Service/edit_service_banner">

                            <input class="form-control " type="hidden" name="service_id" value="<?php echo $service->id?> ">

                            <div class="form-group " >
                                <label>Service Banner Head</label>
                                <input class="form-control " type="text" name="service_banner_head" value="<?php echo $service->big?> ">
                            </div>
                            <div class="form-group " >
                                <label>Service Banner details</label>
                                <textarea class="form-control" id="summernote3" type="text" name="service_banner_details"><?php echo $service->small?></textarea>
                            </div>


                            <input  class="btn btn-success " type="submit" value="Submit">

                        </form>
                    <?php }?>
                    <?php }else{?>

                    <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid13(this)">Add New</button></a>
                </div><br><br><br>

                <?php } ?>


            </div>
        </div>
    </div>
</div><!-- End panel-group -->

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

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>



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
            url:'<?php echo base_url("Service/add_new_service_head/")?>',
            data:{},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }

    function selectid9(x) {
        modal3.style.display = "block";
        btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Service/show_edit_service_details/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }

    function selectid10(x) {
        //modal3.style.display = "block";
        btn3 = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Delete/delete_service_details/")?>'+btn3,
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

    function selectid11(x) {
        modal3.style.display = "block";
        //btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Service/view_add_service_details/")?>',
            data:{},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }

    function selectid12(x) {
        modal3.style.display = "block";
        //btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Service/add_new_service_details_head/")?>',
            data:{},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }
    function selectid13(x) {
        modal3.style.display = "block";
        //btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Service/view_add_banner/")?>',
            data:{},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });
    }

    function selectid14(x) {
        //modal3.style.display = "block";
        btn = document.getElementById('service_id').value;
       // alert(btn);
        //btn = $(x).data('panel-id');
       // document.getElementById("serviceh").style.display = 'block';
       // document.getElementById("servicedetailsh").style.display = 'block';
       // document.getElementById("abd").style.display = 'block';
      //  document.getElementById("abb").style.display = 'block';

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("Service/service_page_admin_after_dropdown/")?>' + btn,
            data: {'id': btn},
            cache: false,
            success: function (data) {
//                $('#res_id').val(data)
                //alert(data);

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
    $(document).ready(function() {
        $('#summernote10').summernote();
    });
    $(document).ready(function() {
        $('#summernote3').summernote();
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

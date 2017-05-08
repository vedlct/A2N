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
<!--        --><?php //$this->load->view('adminmenu');?>

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
<!--                        <div class="panel panel-default">-->
<!--<!--                            <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">-->
<!--<!--                                <h4 class="panel-title" >-->
<!--<!--                                    <a style="color: #fff;" class="accordion-toggle" data-toggle="collapse" data-parent="#serviceh"-->
<!--<!--                                       href="#servicehead">Service Head  <i class="indicator arrow_carrot-down_alt pull-right"></i></a>-->
<!--<!--                                </h4>-->
<!--<!--                            </div>-->

                                <div class="panel-body">
                                    <?php if ($this->data['all_services']!=null){?>

                                    <div style="float: right;>

                                <a href="> <button class="btn btn-success" onclick="selectid1(this)">Add New</button></div><br><br/><br/>

<!--                                <input class="form-control " id="id" type="text" name="id" value="--><?php //echo $id?><!--">-->

                                <?php foreach ($this->data['all_services'] as $service){?>
                                    <form method="post" action="<?php echo base_url()?>Service/edit_service_for_admin" enctype="multipart/form-data">

                                        <input class="form-control " type="hidden" name="service_id" value="<?php echo $service->serviceId?>">

                                        <div class="form-group">
                                            <label>Service Name</label>
                                            <input class="form-control " type="text" name="service_head" value="<?php echo $service->serviceName?> ">
                                        </div>
                                        <div class="form-group">
                                            <label>Service banner</label>
                                            <input class="form-control " type="text" name="service_banner" value="<?php echo $service->serviceBanner?> ">
                                        </div>
                                        <div class="form-group">
                                            <label>Service Summary</label>
                                            <input class="form-control " type="text" name="service_summary" value="<?php echo $service->serviceSummary?> ">
                                        </div>
                                        <div class="form-group " >
                                            <label>Service details</label>
                                            <textarea class="form-control" id="summernote1" type="text" name="service_details"><?php echo $service->serviceDetails?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Page Image</label>
                                            <input class="form-control" type="file" name="pageImage" value="<?php echo $service->image?>" onchange="readURL(this);"
                                        </div>
                                        <div class="form-group " >
                                            <label>Design Class</label>
                                            <select class="form-control" name="service_design_class" id="service_design_class"  >
                                                <option selected  >Select Design</option>
                                                <?php
                                                foreach ($designclass_services as $p)
                                                {
                                                    echo "<option  value='" . $p->designClassId . "'>" . $p->designClassname . "</option>";
                                                }
                                                //
                                                //            foreach ($this->data['menutype'] as $e)
                                                //            {
                                                //                echo "<option value='" . $e->type . "'>" . $e->type . "</option>";
                                                //            }
                                                //
                                                //            ?>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Home Image</label>
                                            <input class="form-control" type="file" name="homeImage" value="<?php echo $service->imageHome?>" onchange="readURL(this);"
                                        </div>
                                        <div class="form-group " >
                                            <label>Added By</label>
                                            <input class="form-control" id="summernote2" type="text" name="service_quote" readonly value="<?php echo $service->addedBy?>">
                                        </div>
                                        <div class="form-group " >
                                            <label>Added Date</label>
                                            <input class="form-control" id="summernote2" type="text" name="service_quote" readonly value="<?php echo $service->addedDate?>">
                                        </div>
                                        <div class="form-group " >
                                            <label>Last Modified By</label>
                                            <input class="form-control" id="summernote2" type="text" name="service_quote" readonly value="<?php echo $service->lastModifiedBy?>">
                                        </div>
                                        <div class="form-group " >
                                            <label>Last Modified Date</label>
                                            <input class="form-control" id="summernote2" type="text" name="service_quote" readonly value="<?php echo $service->lastModifiedDate?>">
                                        </div>

                                        <input  class="btn btn-success " type="submit" value="Submit">

                                    </form>
                                <?php }?>

                                <?php }elseif($this->data['all_services']== null){?>
                                <input class="form-control " id="id" type="hidden" name="id" value="<?php echo $id ?> ">

                                <div style="float: right;>

                                <a href="> <button class="btn btn-success" onclick="selectid1(this)">Add New</button></div><br><br>
                                <?php }?>

                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- end Head Section -->



<!--modal start-->
<div id="myModal5" class="modal">
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
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>



<script>

    // Get the modal
    var modal3 = document.getElementById('myModal5');
    var span = document.getElementsByClassName("close")[0];

    function selectid1(x) {

        modal3.style.display = "block";
        //btn = $(x).data('panel-id');
        //alert(btn);
        //btn = document.getElementById('id').value;

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Service/view_add_new_service/")?>'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });


    }

    //when click on close button close modal
    span.onclick = function() {
        //modal3.style.display = "none";
            location.reload();
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal3) {
           // modal3.style.display = "none";
            location.reload();
        }
    }

</script>
<!-- summer note-->
<script>
    $(document).ready(function() {
        $('#summernote1').summernote();
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

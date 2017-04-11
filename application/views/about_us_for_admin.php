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
                        About Us Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            <!-- Start Head Section -->
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-success ">
                        <div class="panel-heading"><h3>Head</h3></div>
                        <div class="panel-body">

                            <?php if ($this->data['about_us']!=null){?>

                            <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid1(this)">Add New</button></a>
                        </div><br><br><br>


                            <?php foreach ($this->data['about_us'] as $about){?>
                                <form method="post" action="<?php echo base_url()?>About_us/edit_about_us">

                                    <input class="form-control " type="hidden" name="about_us_id" value="<?php echo $about->id?> ">

                                    <div class="form-group " >
                                        <label>About Us Head</label>
                                        <input class="form-control " type="text" name="about_us_head" value="<?php echo $about->big?> ">
                                    </div>
                                    <div class="form-group " >
                                        <label>About Us details</label>
                                        <textarea class="form-control" id="summernote1" type="text" name="about_us_details"><?php echo $about->small?></textarea>
                                    </div>
                                    <div class="form-group " >
                                        <label>About Us quote</label>
                                        <textarea class="form-control" id="summernote2" type="text" name="about_us_quote"><?php echo $about->quote?></textarea>
                                    </div>
                                    <input  class="btn btn-success " type="submit" value="Submit">

                                </form>
                        <?php }?>

                            <?php }elseif($this->data['about_us']==null){?>

                                <form method="post" action="<?php echo base_url()?>About_us/add_new_about_us">">

                                        <div class="form-group " >
                                            <label>About Us Head</label>
                                            <input class="form-control " type="text" name="about_us_head" value=" ">
                                        </div>
                                        <div class="form-group " >
                                            <label>About Us details</label>
                                            <textarea class="form-control" id="summernote1" type="text" name="about_us_details"></textarea>
                                        </div>
                                        <div class="form-group " >
                                            <label>About Us quote</label>
                                            <textarea class="form-control" id="summernote2" type="text" name="about_us_quote"></textarea>
                                        </div>
                                        <input  class="btn btn-success " type="submit" value="Submit">

                                </form>


                        <?php }?>


                    </div>
                </div>
            </div>

        </div>


        <!-- end Head Section -->

    <!-- Start Project Section-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading"><h3>About Us Details</h3></div>
                <div class="panel-body">
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
                                    <?php foreach ($about_details as $adetails){ ?>
                                        <tr>
                                            <td style="text-align: center"><?php echo $adetails->header ?></td>
                                            <td style="text-align: center"><?php echo $adetails->details ?></td>


                                            <td style="text-align: center"><button class="btn btn-warning" data-panel-id="<?php echo $adetails->id ?>" onclick="selectid9(this)">Edit</button>
                                                <button class="btn btn-danger" type="button" data-panel-id="<?php echo $adetails->id ?>" onclick="selectid10(this)">Delete</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                </div>
            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading"><h3>About Us Banner</h3></div>
                <div class="panel-body" >


                    <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid4(this)">Add New</button></a>
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
                        <?php foreach ($about_banner as $ausbanner){?>
                            <tr>
                                <td style="text-align: center"><?php echo $ausbanner->header ?></td>
                                <td style="text-align: center"><?php echo $ausbanner->details ?></td>


                                <td style="text-align: center"><button class="btn btn-warning" data-panel-id="<?php echo $ausbanner->id ?>" onclick="selectid5(this)">Edit</button>
                                    <button class="btn btn-danger" type="button" data-panel-id="<?php echo $ausbanner->id ?>" onclick="selectid8(this)">Delete</button>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

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

    function selectid1(x) {
        modal3.style.display = "block";
        //btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("About_us/add_new_about_head/")?>',
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
            url:'<?php echo base_url("About_us/view_add_new_banner/")?>',
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
            url:'<?php echo base_url("About_us/show_edit_about_us/")?>'+btn,
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
            url:'<?php echo base_url("Delete/delete_about_us_banner/")?>'+btn3,
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

    function selectid9(x) {
        modal3.style.display = "block";
        btn = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("About_us/show_edit_about_us_details/")?>'+btn,
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
            url:'<?php echo base_url("Delete/delete_about_us_details/")?>'+btn3,
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
            url:'<?php echo base_url("About_us/view_add_new_details/")?>',
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

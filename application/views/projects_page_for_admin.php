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
                        project Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="col-md-12">



                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Menu Content</h3></div>
                        <div class="panel-body">





                        <div class="table-responsive">

                            <table class="table  table-bordered">

                                <tr>
                                    <th>
                                        Projects Name
                                    </th>
                                    <th>
                                        Projects Description
                                    </th>

                                    <th>
                                        Projects Image
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>

                                <?php foreach ($all_projects as $m) { ?>
                                    <tr>
                                        <td width="20%"><?php echo $m->name?></td>

                                        <td width="20%"><?php echo $m->project_description?></td>


                                        <td width="20%"><img src="<?php echo base_url()?>images/<?php echo $m->project_image?>" alt="Project image" height="80" width="80"></td>
                                        <td width="20%"><button type="button" data-panel-id="<?php echo $m->project_id ?>" onclick="selectid9(this)" class="btn bg-warning">edit</button>
                                            <button type="button" data-panel-id="<?php echo $m->project_id ?>" onclick="selectid7(this)" class="btn bg-danger">delete</button></td>
                                    </tr>
                                    <?php
                                }?>


                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--modal start-->
        <div id="myModal5" class="modal">
            <br/><br/><br/>
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">×</span>

                <h2>Edit Content</h2>
                <div id="txtHint1"></div>

            </div>


        </div>
        <!--modal end-->


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

<script>


    var modal5 = document.getElementById('myModal5');


    var span = document.getElementsByClassName("close")[0];


    function selectid9(x) {

        modal5.style.display = "block";

        btn9 = $(x).data('panel-id');
        //alert(btn9);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Project/edit_project/")?>'+btn9,
            data:{id5:btn9},
            cache: false,
            success:function(data) {

                //alert(data);
                $('#txtHint1').html(data);

            }

        });


    }

    function selectid7(x) {
        //modal3.style.display = "block";
        btn4 = $(x).data('panel-id');
        //alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Delete/delete_Project_by_id/")?>'+btn4,
            data:{id:btn4},
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

    function selectid10(x) {
        //modal3.style.display = "block";
        btn = document.getElementById('project_id').value;
        alert(btn);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Project/get_project_by_id/")?>'+btn,
            data:{id:btn},
            cache: false,
            success:function(data) {


                    //alert(data);
                    $('#txtHint').html(data);

            }

        });
    }







    span.onclick = function() {
        modal5.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal5) {
            modal5.style.display = "none";
        }
    }
</script>

<script>
    $(function() {

        var pgurl = window.location.href;
        //substr(window.location.href.lastIndexOf("/")+1);

        //alert(pgurl);

        $(".side-nav li").each(function(){
            // alert($('a',this).attr("href"));

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

</body>

</html>

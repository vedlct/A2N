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
                        <div class="panel-heading"><h3>Menu Content</h3></div>
                        <div class="panel-body">
                            <div style="float: right;>
                                      <a href="#"> <button class="btn btn-success" onclick="selectid6(this)">Add menu </button></a><br><br>
                        </div>

                            <table class="table table-responsive table-bordered">

                                <tr>
                                    <th>
                                       Name
                                    </th>
                                    <th>
                                        Parent ID
                                    </th>
                                    <th>
                                        level
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>

                                    <?php foreach ($show_menu as $m) { ?>
                                <tr>
                                        <td width="20%"><?php echo $m->name?></td>
                                        <td width="20%"><?php echo $m->parent_id?></td>
                                        <td width="20%"><?php echo $m->level?></td>
                                        <td width="20%"><button class="btn bg-warning">edit</button>
                                            <button class="btn bg-danger">delete</button></td>
                                </tr>
                                        <?php
                                    }?>


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

                <h2>Add New Menu</h2>
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



                        <input type="hidden" name="id" value="">
                        <input class="btn btn-success" type="submit">
                    <?php }?>
                </form>

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

<script>

    function selectid6() {
        var modal3 = document.getElementById('myModal3');
        var span = document.getElementsByClassName("close")[0];
        modal3.style.display = "block";

        span.onclick = function() {
            modal3.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal3) {
                modal3.style.display = "none";
            }
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
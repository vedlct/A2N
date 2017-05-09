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
                        Menu Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">

<!--                    <div class="panel-group" id="menu">-->
<!--                        <div class="panel panel-default">-->
<!--                            <div class="panel-heading" style=" background: #78cfcf; border-bottom: 1px solid #78cfcf;">-->
<!--                                <h4 class="panel-title">-->
<!--                                    <a style="color: #fff;"class="accordion-toggle" data-toggle="collapse" data-parent="#menu"-->
<!--                                       href="#menus">Menu Content <i class="indicator arrow_carrot-down_alt pull-right"></i></a>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                            <div id="menus" class="panel-collapse collapse">-->
<!--                                <div class="panel-body">-->
<!---->
<!---->
<!--                                    <div style="float: right;>-->
<!--                                      <a href="#"> <button class="btn btn-success" onclick="selectid6(this)">Add menu </button></a>-->
<!--                                </div><br><br><br>-->
<!---->
<!--                                <div class="table-responsive">-->
<!---->
<!--                                    <table class="table  table-bordered">-->
<!---->
<!--                                        <tr>-->
<!--                                            <th>-->
<!--                                                Name-->
<!--                                            </th>-->
<!--                                            <th>-->
<!--                                                Parent ID-->
<!--                                            </th>-->
<!--                                            <th>-->
<!--                                                level-->
<!--                                            </th>-->
<!--                                            <th>-->
<!--                                                Action-->
<!--                                            </th>-->
<!--                                        </tr>-->
<!---->
<!--                                        --><?php //foreach ($show_menu as $m) { ?>
<!--                                            <tr>-->
<!--                                                <td width="20%">--><?php //echo $m->name?><!--</td>-->
<!--                                                <td width="20%">--><?php //echo $m->parent_id?><!--</td>-->
<!--                                                <td width="20%">--><?php //echo $m->level?><!--</td>-->
<!--                                                <td width="20%"><button type="button" data-panel-id="--><?php //echo $m->menu_id ?><!--" onclick="selectid9(this)" class="btn bg-warning">edit</button>-->
<!--                                                    <button type="button" data-panel-id="--><?php //echo $m->menu_id ?><!--" onclick="selectid7(this)" class="btn bg-danger">delete</button></td>-->
<!--                                            </tr>-->
<!--                                            --><?php
//                                        }?>
<!---->
<!---->
<!--                                    </table>-->
<!--                                </div>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div><!-- End panel-group -->

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Menu Content</h3></div>
                        <div class="panel-body">

                            <div style="float: right;>
                                      <a href="#"> <button class="btn btn-success" onclick="selectid6(this)">Add menu </button></a>
                        </div><br><br><br>

                        <div class="table-responsive">

                            <table class="table  table-bordered">

                                <tr>
                                    <th>
                                       Name
                                    </th>
                                    <th>
                                        Parent Name
                                    </th>

                                    <th>
                                        Level
                                    </th>


                                    <th>
                                        Action
                                    </th>
                                </tr>

                                    <?php foreach ($show_menu as $m) { ?>
                                <tr>
                                        <td width="20%"><?php echo $m->menuName?></td>
                                    <?php $parent_id=$m->parentId; if ($parent_id !='0' ){$query = $this->db->query("SELECT * FROM `menu` WHERE `menuId`='$parent_id'");
                                    foreach ($query ->result() as $f){$parent_name=$f->menuName;}}else{$parent_name=$m->menuName;}?>
                                        <td width="20%"><?php echo $parent_name ?></td>
                                        <td width="20%"><?php echo $m->level?></td>

                                    <td width="20%"><button type="button" data-panel-id="<?php echo $m->menuId ?>" onclick="selectid9(this)" class="btn bg-warning">edit</button>
                                        <button type="button" data-panel-id="<?php echo $m->menuId ?>" onclick="selectid7(this)" class="btn bg-danger">delete</button></td>



                                    <?php }?>


                            </table>
                        </div>
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

                        <div>
                        <div class="form-group">
                            <div class="form-group " >
                                <label>level (0=Main Menu | 1=Sub Menu | 2= Sub-Sub Menu | SO ON)</label>
                                <input class="form-control " type="text" name="level" id="level" onkeyup="levelfunc()" >
                            </div>
                        </div>

                        <div id="txtHint2"></div>
                        </div>
                        <br>

<!--                        <div class="form-group">-->
<!--                            <div class="form-group " >-->
<!--                                <label>Page Name</label>-->
<!--                                <input class="form-control " type="text" name="name" >-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <div class="form-group " >-->
<!--                                <label>Page Title</label>-->
<!--                                <input class="form-control " type="text" name="title" >-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group " >-->
<!--                            <label>Page Summary</label>-->
<!--                            <textarea class="form-control" id="summernote" type="text" name="summary"></textarea>-->
<!--                        </div>-->
<!--                        <div class="form-group " >-->
<!--                            <label>Page Content</label>-->
<!--                            <textarea class="form-control" id="summernote2" type="text" name="content"></textarea>-->
<!--                        </div>-->


                        <div class="form-group">
                            <label>Insert By</label>
                            <input class="form-control" type="text" name="insertby" value="<?php echo $u->name?>" readonly>
                        </div>

                        <input class="btn btn-success" type="submit"value="submit">
                    <?php }?>
                </form>

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
        $('#summernote2').summernote();
    });
</script>

<script>

    var modal3 = document.getElementById('myModal3');
    var modal5 = document.getElementById('myModal5');

    var span = document.getElementsByClassName("close")[0];
    var span1 = document.getElementsByClassName("close")[1];

    function selectid6() {

        modal3.style.display = "block";


    }

    function selectid9(x) {

        modal5.style.display = "block";

        btn9 = $(x).data('panel-id');
        //alert(btn9);

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Menu/edit_menu/")?>'+btn9,
            data:{id:btn9},
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
            url:'<?php echo base_url("Delete/delete_menu/")?>'+btn4,
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

    function levelfunc() {
        var z = document.getElementById("level").value;

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Menu/dropdownmenu/")?>'+z,
            data:{id:z},
            cache: false,
            success:function(data) {

                //  alert(data);

                $('#txtHint2').html(data);
                //document.getElementById("old_page").style.display = "block";
                //document.getElementById("new_page").style.display = "none";

            }

        });
    }



    span.onclick = function() {
        modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }

    span1.onclick = function() {
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

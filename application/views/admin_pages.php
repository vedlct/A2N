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
                       PAGES
                    </h1>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="col-md-12">

                    <div class="form-group" id="dropdown-style">

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Main Content</h3></div>
                        <div class="panel-body">
                            <select class="form-control" name="page_name" id="page_name" onchange="pageselect()">
                                <option selected  >Select Option</option>
                                <option value="newpage">New Page</option>
                                <!--            --><?php
                                foreach ($page_name as $p)
                                {
                                    echo "<option  value='" . $p->pageId . "'>" . $p->pageName . "</option>";
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

                        <div id="new_page" class="panel-body" style="display: none">

                            <form method="post" action="<?php echo base_url() ?>Pages/insert_pages/"
                                  enctype="multipart/form-data">


                                <div class="form-group">
                                    <div class="form-group " >
                                        <label>Page Name</label>
                                        <input class="form-control " type="text" name="name" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group " >
                                        <label>Page Title</label>
                                        <input class="form-control " type="text" name="title" >
                                    </div>
                                </div>

                                <div class="form-group " >
                                    <label>Page Summary</label>
                                    <textarea class="form-control" id="summernote" type="text" name="summary"></textarea>
                                </div>
                                <div class="form-group " >
                                    <label>Page Content</label>
                                    <textarea class="form-control" id="summernote2" type="text" name="content"></textarea>
                                </div>

                                <div id="radio" onclick="radio()">
                                    <input type="radio" id="newMenu" name="menu" value="newmenu">New Menu &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="oldMenu" name="menu" value="oldmenu">Old Menu<br>
                                </div>

                                <br>
                                <div id="newmenudiv" style="display: none">
                                    <div class="form-group">
                                        <div class="form-group " >
                                            <label>Menu Name</label>
                                            <input class="form-control " type="text" name="title" >
                                        </div>
                                    </div>
                                </div>
                                <div id="oldmenudiv" style="display: none">

                                    <div class="form-group">
                                        <div class="form-group " >
                                            <label>Menu Name</label>
                                            <input class="form-control " type="text" name="oldtitle" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group " >
                                            <label>level (0=Main Menu | 1=Sub Menu | 2= Sub-Sub Menu | SO ON)</label>
                                            <input class="form-control " type="text" name="level" id="level" onkeyup="levelfunc()" >
                                        </div>
                                    </div>

                                    <div id="txtHint2"></div>

                                </div>
                                <br>
                                <input class="btn btn-success" type="submit" value="Submit">


                            </form>
                        </div>



                        <div id="old_page" class="panel-body" style="display: none">

                            <div id="txtHint1"></div>
                        </div>


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

    function pageselect() {

      var x =  document.getElementById("page_name").value;
        if (x == "newpage"){

            document.getElementById("new_page").style.display = "block";
            document.getElementById("old_page").style.display = "none";
        }else {

            $.ajax({
                type:'POST',
                url:'<?php echo base_url("Pages/old_page/")?>'+x,
                data:{id:x},
                cache: false,
                success:function(data) {

                  //  alert(data);

                    $('#txtHint1').html(data);
                    document.getElementById("old_page").style.display = "block";
                    document.getElementById("new_page").style.display = "none";

                }

            });

        }
    }
    
    function radio() {
        if (document.getElementById('newMenu').checked)
        {
            document.getElementById("newmenudiv").style.display = "block";
            document.getElementById("oldmenudiv").style.display = "none";
        }else
        {
            document.getElementById("oldmenudiv").style.display = "block";
            document.getElementById("newmenudiv").style.display = "none";
        }
    }

    function levelfunc() {
        var z = document.getElementById("level").value;

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Pages/dropdownmenu/")?>'+z,
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
</script>


<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>


<script>
    $(document).ready(function() {
        $('#summernote2').summernote();
    });
</script>


<script>



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

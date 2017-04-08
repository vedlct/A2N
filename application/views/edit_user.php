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
                        User Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-success">
                        <div class="panel-heading"><h3>Main Content</h3></div>
                        <div class="panel-body">

                            <div style="float: right;>

                                <a href="#"> <button class="btn btn-success" onclick="selectid1(this)">Add New</button></a>
                        </div><br><br><br>
                        <div>
                            <form method="post" action="<?php echo base_url()?>User/edit_user">

                                <?php foreach ($user_info as $uinfo){?>
                                <div class="row" >
                                    <div class="col-md-6 col-sm-6" >
                                        <div class="form-group" >

                                            <label >User Name</label >
                                            <input class="form-control" type="text" name="username" value="<?php echo $uinfo->username?>">
                                        </div >
                                    </div >
                                    <div class="col-md-6 col-sm-6" >
                                        <div class="form-group" >
                                            <label>Password</label>
                                            <input class="form-control" type="text" name="password" value="<?php echo $uinfo->password?>">
                                        </div >
                                    </div >
                                </div >

                                    <div class="row" >
                                        <div class="col-md-6 col-sm-6" >
                                            <div class="form-group" >

                                                <label>First Name</label>
                                                <input class="form-control" type="text" name="first_name" value="<?php echo $uinfo->first_name?>" >
                                            </div >
                                        </div >
                                        <div class="col-md-6 col-sm-6" >
                                         <div class="form-group">
                                             <label>Last Name</label>
                                             <input class="form-control" type="text" name="last_name" value="<?php echo $uinfo->last_name?>" >
                                         </div>
                                        </div >
                                    </div >

                                    <div class="row" >
                                        <div class="col-md-6 col-sm-6" >
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" type="text" name="phone_number" value="<?php echo $uinfo->phone_number?>" >
                                        </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6" >
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="email" value="<?php echo $uinfo->email?>" >
                                        </div>
                                        </div >
                                    </div >

                                    <input type="hidden" name="id" value="<?php echo $uinfo->login_id?>">
                                    <input class="btn btn-success" type="submit" value="submit">

                                <?php } ?>

                            </form>
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
                    </div>
                </div>

            </div>





        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<script>
    $(function() {

        var pgurl = window.location.href;
        //substr(window.location.href.lastIndexOf("/")+1);

       // alert(pgurl);

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
            url:'<?php echo base_url("User/create_new_user")?>',
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
</body>

</html>

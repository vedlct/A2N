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
                        <div class="panel-heading"><h3>Main Content</h3></div>
                        <div class="panel-body">
                            <form method="post" action="<?php echo base_url()?>Admin/edit_user">
                                <?php foreach ($user_info as $uinfo){}?>

                                <div class="form-group">
                                <label>User Name</label>
                                <input class="form-control" type="text" name="username" value="<?php echo $uinfo->username?>" >
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="text" name="password" value="<?php echo $uinfo->password?>" >
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" name="first_name" value="<?php echo $uinfo->first_name?>" >
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="last_name" value="<?php echo $uinfo->last_name?>" >
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" name="phone_number" value="<?php echo $uinfo->phone_number?>" >
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text" name="email" value="<?php echo $uinfo->email?>" >
                                </div>


                                <input type="hidden" name="id" value="<?php echo $uinfo->login_id?>">
                                <input class="btn btn-success" type="submit">

                            </form>
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
</body>

</html>

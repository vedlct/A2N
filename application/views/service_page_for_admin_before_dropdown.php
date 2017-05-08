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
                        Service Page Contents
                    </h1>
                </div>
            </div>
            <!-- /.row -->



            <!-- Start Head Section -->
            <div class="row">
                <div class="col-md-12">

                    <div class="form-group" id="dropdown-style">

                        <label>Select Service</label>
                        <select class="form-control" name="service_id" id="service_id"  onchange="selectid14(this)">
                            <option selected  >Select service</option>

                            <?php
                            foreach ($all_services as $p)
                            {
                                echo "<option  value='" . $p->serviceId . "'>" . $p->serviceName . "</option>";
                            }
                            ?>

                        </select>
                    </div>

                    <div id="text"></div>

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

    </div>


    <!-- end Head Section -->




</div>

</div>

<!-- Start Project Section-->


<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>







</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->



<script>


    // Get the modal

    var modal3 = document.getElementById('myModal3');
    var span = document.getElementsByClassName("close")[0];



    function selectid14(x) {

        modal3.style.display = "block";

        btn = document.getElementById('service_id').value;

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("Service/service_page_admin_after_dropdown/")?>' + btn,
            data: {'id': btn},
            cache: false,
            success: function (data) {
//                $('#res_id').val(data)
                //alert(data);
                //location.reload();
                //$('#dropdown-style').load(document.URL +  ' #dropdown-style');


                $('#txtHint').html(data);
                //document.getElementById("dropdown-style").style.display = 'none';


            }


        });

    }


    //when click on close button close modal
    span.onclick = function() {
        //location.reload();
       // modal3.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        //location.reload();
        if (event.target == modal3) {
            modal3.style.display = "none";

        }
    }

</script>
<!-- summer note-->
<!--<script>-->
<!--    $(document).ready(function() {-->
<!--        $('#summernote1').summernote();-->
<!--    });-->
<!---->
<!--    $(document).ready(function() {-->
<!--        $('#summernote2').summernote();-->
<!--    });-->
<!--    $(document).ready(function() {-->
<!--        $('#summernote10').summernote();-->
<!--    });-->
<!--    $(document).ready(function() {-->
<!--        $('#summernote3').summernote();-->
<!--    });-->
<!--</script>-->
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

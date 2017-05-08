<form method="post" action="<?php echo base_url()?>Service/add_new_service" enctype="multipart/form-data">

    <input class="form-control " type="hidden" name="id" value="">

    <div class="form-group">
        <label>Service Name</label>
        <input class="form-control " type="text" name="service_head" value="">
    </div>
    <div class="form-group">
        <label>Service banner</label>
        <input class="form-control " type="text" name="service_banner" value="">
    </div>
    <div class="form-group">
        <label>Service Summary</label>
        <input class="form-control " type="text" name="service_summary" >
    </div>
    <div class="form-group " >
        <label>Service details</label>
        <textarea class="form-control" id="summernote3" type="text" name="service_details"></textarea>
    </div>
    <div class="form-group">
        <label>Page Image</label>
        <input class="form-control" type="file" name="pageImage" value="" onchange="readURL(this);"
    </div>
    <div class="form-group " >
        <label>Design Class</label>
        <input class="form-control" id="summernote2" type="text" name="service_design_class" value="">
    </div>
    <div class="form-group">
        <label>Home Image</label>
        <input class="form-control" type="file" name="homeImage" value="" onchange="readURL(this);">
    </div>

    <br/>
    <input  class="btn btn-success " type="submit" value="Submit">

</form>

<script>
    // Get the modal
    var modal3 = document.getElementById('myModal5');
    var span = document.getElementsByClassName("close")[0];

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

    $(document).ready(function() {
        $('#summernote3').summernote();
    });

    $(document).ready(function() {
        $('#summernote4').summernote();
    });
</script>
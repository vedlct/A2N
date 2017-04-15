
<form method="post" action="<?php echo base_url() ?>Service/add_new_service_details?>"
      enctype="multipart/form-data">


    <div class="form-group">
        <div class="form-group " >
            <label>Service Details Head</label>
            <input class="form-control " type="text" name="header" value="">
        </div>
    </div>
    <div class="form-group " >
        <label>Service details</label>
        <textarea class="form-control" id="summernote4" type="text" name="details"></textarea>
    </div>


    <input class="btn btn-success" type="submit" value="Submit">

</form>
<!-- summer note-->
<script>
    $(document).ready(function() {
        $('#summernote4').summernote();
    });
</script>

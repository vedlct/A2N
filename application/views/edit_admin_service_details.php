
<?php foreach ($service_details as $ausdetails){ }?>
<form method="post" action="<?php echo base_url() ?>Service/update_service_details/<?php echo $ausdetails->id ?>"
      enctype="multipart/form-data">


    <div class="form-group">
        <div class="form-group " >
            <label>Service Header</label>
            <input class="form-control " type="text" name="header" value="<?php echo $ausdetails->header ?> ">
        </div>
    </div>
    <div class="form-group " >
        <label>Service details</label>
        <textarea class="form-control" id="summernote4" type="text" name="details"><?php echo $ausdetails->details ?></textarea>
    </div>


    <input class="btn btn-success" type="submit" value="Submit">

</form>
<!-- summer note-->
<script>
    $(document).ready(function() {
        $('#summernote4').summernote();
    });
</script>

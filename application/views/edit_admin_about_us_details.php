
<?php foreach ($about_details as $ausdetails){ }?>
<form method="post" action="<?php echo base_url() ?>About_us/update_about_us_details/<?php echo $ausdetails->id ?>"
      enctype="multipart/form-data">


    <div class="form-group">
        <div class="form-group " >
            <label>About Us Head</label>
            <input class="form-control " type="text" name="header" value="<?php echo $ausdetails->header ?> ">
        </div>
    </div>
    <div class="form-group " >
        <label>About Us details</label>
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

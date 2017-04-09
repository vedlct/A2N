
<?php foreach ($about_banner as $ausbanner){ }?>
<form method="post" action="<?php echo base_url() ?>About_us/update_about_us/<?php echo $ausbanner->id ?>"
      enctype="multipart/form-data">


    <div class="form-group">
        <div class="form-group " >
            <label>About Us Head</label>
            <input class="form-control " type="text" name="header" value="<?php echo $ausbanner->header ?> ">
        </div>
    </div>
    <div class="form-group " >
        <label>About Us details</label>
        <textarea class="form-control" id="summernote4" type="text" name="details"><?php echo $ausbanner->details ?></textarea>
    </div>


    <input class="btn btn-success" type="submit" value="Submit">

</form>
<!-- summer note-->
<script>
    $(document).ready(function() {
        $('#summernote4').summernote();
    });
</script>

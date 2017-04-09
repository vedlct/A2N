

<form method="post" action="<?php echo base_url()?>About_us/add_new_about_us">

    <div class="form-group " >
        <label>About Us Head</label>
        <input class="form-control " type="text" name="about_us_head" value=" ">
    </div>
    <div class="form-group " >
        <label>About Us details</label>
        <textarea class="form-control" id="summernote3" type="text" name="about_us_details"></textarea>
    </div>
    <div class="form-group " >
        <label>About Us quote</label>
        <textarea class="form-control" id="summernote4" type="text" name="about_us_quote"></textarea>
    </div>
    <input  class="btn btn-success " type="submit" value="Submit">

</form>

<script>
    $(document).ready(function() {
        $('#summernote3').summernote();
    });

    $(document).ready(function() {
        $('#summernote4').summernote();
    });
</script>
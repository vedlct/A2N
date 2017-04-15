

<form method="post" action="<?php echo base_url()?>Service/add_new_service_header">

    <div class="form-group " >
        <label>Service Head</label>
        <input class="form-control " type="text" name="service_head" value=" ">
    </div>
    <div class="form-group " >
        <label>Service details</label>
        <textarea class="form-control" id="summernote3" type="text" name="service_details"></textarea>
    </div>
    <div class="form-group " >
        <label>Service quote</label>
        <textarea class="form-control" id="summernote4" type="text" name="service_quote"></textarea>
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
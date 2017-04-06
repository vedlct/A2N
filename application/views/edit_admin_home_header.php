
<?php foreach ($this->data['design_head_by_id'] as $head_by_id){ ?>
    <form  method="post" action="Admin_Home/edit_header_by_id/<?php echo $head_by_id->design_page_id ?>" >

        <div class="form-group">
            <label>Head</label>
            <textarea class="form-control" id="summernote" type="text" name="destails"><?php echo $head_by_id->details ?></textarea><br/>
        </div>

        <input class="btn btn-success" type="submit" value="Submit">

    </form>
<?php } ?>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
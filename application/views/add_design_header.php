

    <form  method="post" action="Admin_Home/add_design_head/" >

        <div class="form-group">
            <label>Head</label>
            <textarea class="form-control" id="summernote" type="text" name="destails"></textarea><br/>
        </div>

        <input class="btn btn-success" type="submit" value="Submit">

    </form>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
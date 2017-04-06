

<form  method="post" action="" >

    <div class="form-group">
        <label>Head</label>
        <textarea class="form-control" id="summernote" type="text" name="Head"></textarea><br/>
    </div>

    <input class="btn btn-success" type="submit" value="Submit">

</form>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
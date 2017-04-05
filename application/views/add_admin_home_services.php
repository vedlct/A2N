

<form  method="post" action="" >

    <div class="form-group">
        <label>Design Class</label>
<!--        <input class="form-control"type="text" name="status" value="">-->
        <select class="form-control" name="design_class" id="design_class"  >
            <option selected  >Select Design</option>
<!--            --><?php
//
//            foreach ($this->data['menutype'] as $e)
//            {
//                echo "<option value='" . $e->type . "'>" . $e->type . "</option>";
//            }
//
//            ?>

        </select>
    </div>

    <div class="form-group">
        <label>Details</label>
        <textarea class="form-control" id="summernote"  type="text" name="Head"></textarea><br/>
    </div>

    <div class="form-group">
        <label>File input</label>
        <input type="file" name="Photo" onchange="readURL(this);"
    </div><br>

    <input class="btn btn-success" type="submit" value="Submit">

</form>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
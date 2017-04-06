

<form  method="post" action="Admin_Home/add_new_service" enctype="multipart/form-data" >

    <div class="form-group">
        <label>Design Class</label>
<!--        <input class="form-control"type="text" name="status" value="">-->
        <select class="form-control" name="design_class" id="design_class"  >
            <option selected  >Select Design</option>
<?php

           foreach ($this->data['services_design_class'] as $class_name) {
               {
                   echo "<option value='" . $class_name->name . "'>" . $class_name->name . "</option>";
               }

           }?>

        </select>
    </div>

    <div class="form-group">
        <label>Details</label>
        <textarea class="form-control" id="summernote"  type="text" name="details"></textarea><br/>
    </div>

    <div class="form-group">
        <label>Service Name</label>
        <input class="form-control"type="text" name="service_name">
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
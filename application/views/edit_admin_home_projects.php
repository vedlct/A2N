
<?php foreach ($this->data['edit_project'] as $eprojects){ ?>
<form method="post" action="<?php echo base_url() ?>Admin_Home/update_project/<?php echo $eprojects->id ?>"
      enctype="multipart/form-data">


    <div class="form-group">
        <label>Design Class</label>
        <!--        <input class="form-control"type="text" name="status" value="">-->
        <select class="form-control" name="design_class" id="design_class">
            <option selected>Design Class</option>
            <?php

            foreach ($this->data['projects'] as $e) {
                echo "<option value='" . $e->name . "'>" . $e->name . "</option>";
            }

            }  ?>

        </select>
    </div>

<!--    <div class="form-group">-->
<!--        <label>Details</label>-->
<!--        <textarea class="form-control" id="summernote"  type="text" name="Head"></textarea><br/>-->
<!--    </div>-->
    <input type="hidden" name="id" value="">
    <div class="form-group">
        <label>File input</label>
        <input type="file" name="Photo" onchange="readURL(this);"
    </div><br>

    <input class="btn btn-success" type="submit" value="Submit">

</form>


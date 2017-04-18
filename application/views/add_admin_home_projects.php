


<form  method="post" action="<?php echo base_url()?>Admin_Home/insert_project" enctype="multipart/form-data" >

    <div class="form-group">
        <label>ADD Projects From Database</label>
        <!--        <input class="form-control"type="text" name="status" value="">-->
        <select class="form-control" name="project" id="project"  onchange="selectid10(this)" >
            <option selected  >Select Project</option>
            <!--            --><?php
            foreach ($all_projects as $pr)
            {
                echo "<option  value='" . $pr->id . "'>" . $pr->title . "</option>";
            }
            ?>

        </select>
    </div>
    <div class="form-group" id="projecttitle" >
        <label>Title</label>
        <input class="form-control" type="text" name="projectname" value="" >
    </div>



    <div class="form-group">
        <label>Design Class</label>
        <!--        <input class="form-control"type="text" name="status" value="">-->
        <select class="form-control" name="design_class" id="design_class"  >
            <option selected  >Select Design</option>
            <!--            --><?php
            foreach ($projects as $p)
            {
                echo "<option  value='" . $p->name . "'>" . $p->name . "</option>";
            }
            //
            //            foreach ($this->data['menutype'] as $e)
            //            {
            //                echo "<option value='" . $e->type . "'>" . $e->type . "</option>";
            //            }
            //
            //            ?>

        </select>
    </div>

<!--    <div class="form-group">-->
<!--        <label>Details</label>-->
<!--        <textarea class="form-control" id="summernote"  type="text" name="Head"></textarea><br/>-->
<!--    </div>-->

    <div class="form-group">
        <label>File input</label>
        <input type="file" name="Photo" onchange="readURL(this);"
    </div><br>

    <input class="btn btn-success" type="submit" value="Submit">

</form>

<script>

    function selectid10(x) {

        document.getElementById("projecttitle").style.display = 'none';
    }
</script>


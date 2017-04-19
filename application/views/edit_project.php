<?php foreach ($this->data['show_project_by_id'] as $m){?>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Project/edit_project_by_id/<?php echo $m->id?>">


        <div class="form-group">
            <label>Project Name</label>
            <input class="form-control" type="text" name="projectname" value="<?php echo $m->title?>" >
        </div>


        <div class="form-group">
            <label>Project Description</label>
            <textarea class="form-control" id="summernote1" type="text" name="details"><?php echo $m->project_description?></textarea>
        </div>

        <div class="form-group">
            <label>File input</label>
            <input class="form-control" type="file" name="Photo" onchange="readURL(this);"
        </div>
        <br>
        <br>


        <div >
            <h3 style="text-align: center"><b>For Portfolio Page</b></h3>
            <div class="form-group col-md-6" >
                <label>Design Class </label>
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

            <div class="form-group col-md-6" >
                <label>Image</label><br>
                <input class="form-control" type="file" name="Photo1" onchange="readURL(this);"
            </div>
            <br>
            <br>

        </div>



        <?php foreach ($this->data['name'] as $z){?>
            <div class="form-group">

                <input class="form-control" type="hidden" name="insertby" value="<?php echo $z->name ?>" readonly>
            </div>
        <?php }?>
        <input class="btn btn-success" type="submit"value="submit">

    </form>
<?php }?>

<script>
    $(document).ready(function() {
        $('#summernote1').summernote();
    });
</script>
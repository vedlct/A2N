
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Project/add_new_project/">


        <div class="form-group">
            <label>Project Name</label>
            <input class="form-control" type="text" name="projectname" value="" >
        </div>


        <div class="form-group">
            <label>Project Description</label>
            <textarea class="form-control" id="summernote1" type="text" name="details"></textarea>
        </div>

        <div class="form-group">
            <label>File input</label>
            <input type="file" name="Photo" onchange="readURL(this);"
        </div>
        <br>
        <br>

        <div class="form-group " >
            <label>Design Class For Portfolio Page</label>
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

        <div class="form-group" >
            <label>Image For Portfotio Page</label>
            <input type="file" name="Photo1" onchange="readURL(this);"
        </div>
        <br>
        <br>



        <?php foreach ($this->data['name'] as $z){?>
            <div class="form-group">

                <input class="form-control" type="hidden" name="insertby" value="<?php echo $z->name ?>" readonly>
            </div>
        <?php }?>
        <input class="btn btn-success" type="submit"value="submit">

    </form>


<script>
    $(document).ready(function() {
        $('#summernote1').summernote();
    });
</script>
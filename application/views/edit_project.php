<?php foreach ($this->data['show_project_by_id'] as $m){?>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Project/edit_project_by_id/<?php echo $m->project_id?>">


        <div class="form-group">
            <label>Project Name</label>
            <input class="form-control" type="text" name="projectname" value="<?php echo $m->name?>" >
        </div>


        <div class="form-group">
            <label>Project Description</label>
            <textarea class="form-control" id="summernote1" type="text" name="details"><?php echo $m->project_description?></textarea>
        </div>

        <div class="form-group">
            <label>File input</label>
            <input type="file" name="Photo" onchange="readURL(this);"
        </div>
        <br>
        <br>



        <?php foreach ($this->data['name'] as $z){?>
            <div class="form-group">
                <label>Insert By</label>
                <input class="form-control" type="text" name="insertby" value="<?php echo $z->name ?>" readonly>
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
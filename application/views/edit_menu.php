

<?php foreach ($this->data['menu_by_id'] as $m){?>
<form method="post" action="<?php echo base_url()?>Menu/edit_menu_by_id/<?php echo $m->menu_id?>">


        <div class="form-group">
            <label>Menu Name</label>
            <input class="form-control" type="text" name="menuname" value="<?php echo $m->name?>" >
        </div>
        <div class="form-group">
            <label>Parent ID</label>
<!--            <input class="form-control" type="text" name="parent_id" value="--><?php //echo $m->parent_id?><!--" >-->
            <select class="form-control" name="parent_id" id="parent_id"  >
                <option selected  >Select parent</option>
                <option >Make This Menu</option>
                <!--            --><?php
                foreach ($show_menu_by_id as $p)
                {
                    echo "<option  value='" . $p->menu_id . "'>" . $p->name . "</option>";
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

        <div class="form-group">
            <label>Details</label>
            <textarea class="form-control" id="summernote1" type="text" name="details"><?php echo $m->details?></textarea>
        </div>
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

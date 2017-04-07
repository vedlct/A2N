<form method="post" action="<?php echo base_url()?>Menu/insert_menu">

    <?php foreach ($name as $u){?>
        <div class="form-group">
            <label>Menu Name</label>
            <input class="form-control" type="text" name="menuname" value="" >
        </div>
        <div class="form-group">
            <label>Parent ID</label>
            <input class="form-control" type="text" name="parent_id" value="" >
        </div>
        <div class="form-group">
            <label>Details</label>
            <textarea class="form-control" id="summernote" type="text" name="details"></textarea>
        </div>
        <div class="form-group">
            <label>Insert By</label>
            <input class="form-control" type="text" name="insertby" value="<?php echo $u->name?>" readonly>
        </div>



        <input type="hidden" name="id" value="">
        <input class="btn btn-success" type="submit">
    <?php }?>
</form>
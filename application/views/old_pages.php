<?php foreach ($old_page as $op) { ?>
    <form method="post" action="<?php echo base_url() ?>About_us/update_about_us/"
          enctype="multipart/form-data">


        <div class="form-group">
            <div class="form-group ">
                <label>Page Name</label>
                <input class="form-control " type="text" name="header" value="<?php echo $op->pageName?>">
            </div>
        </div>
        <div class="form-group ">
            <label>Page Title</label>
            <textarea class="form-control" id="summernote" type="text" name="details"><?php echo $op->pageTitle?></textarea>
        </div>


        <input class="btn btn-success" type="submit" value="Submit">

    </form>
    <?php
}
    ?>
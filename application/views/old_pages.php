
<?php foreach ($old_page as $op) { ?>
    <form method="post" action="<?php echo base_url() ?>Pages/edit_page/<?php echo $op->pageId?>"
          enctype="multipart/form-data">


        <div class="form-group">
            <div class="form-group " >
                <label>Page Name</label>
                <input class="form-control " type="text" name="name" value="<?php echo $op->pageName?>">
            </div>
        </div>
        <div class="form-group">
            <div class="form-group " >
                <label>Page Title</label>
                <input class="form-control " type="text" name="title" value="<?php echo $op->pageTitle?>" >
            </div>
        </div>

        <div class="form-group " >
            <label>Page Summary</label>
            <textarea class="form-control" id="summernote3" type="text" name="summary" ><?php echo $op->pageSummary?></textarea>
        </div>
        <div class="form-group " >
            <label>Page Content</label>
            <textarea class="form-control" id="summernote4" type="text" name="content"><?php echo $op->pageSummary?></textarea>
        </div>
        <input type="hidden" value="<?php echo $op->menuId?>" name="menuid">
        <?php
        $query = $this->db->query("SELECT * FROM `menu` WHERE `menuId` = '$op->menuId'");
        foreach ($query->result() as $m) {

            ?>
            <div class="form-group">
                <div class="form-group ">
                    <label>Menu Name</label>
                    <input class="form-control " type="text" name="oldtitle" value="<?php echo $m->menuName?>">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group ">
                    <label>level (0=Main Menu | 1=Sub Menu | 2= Sub-Sub Menu | SO ON)</label>
                    <input class="form-control " type="text" name="level" id="level2" onkeyup="levelfunc()" value="<?php echo $m->level?>">
                </div>
            </div>


            <?php
        }
        ?>
        <div id="txtHint3"></div>
        <br>

        <div class="form-group">
            <label>Insert By</label>
            <?php foreach ($this->data['name'] as $u){?>
                <input class="form-control" type="text" name="insertby" value="<?php echo $u->name?>" readonly>
            <?php }?>
        </div>

        <input class="btn btn-success" type="submit" value="Submit">





    </form>
    <?php
}
    ?>

<script>
    $(document).ready(function() {
        $('#summernote3').summernote();
    });
</script>


<script>
    $(document).ready(function() {
        $('#summernote4').summernote();
    });
</script>
<script>
    function levelfunc() {
        var z = document.getElementById("level2").value;


        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Pages/dropdownmenu/")?>'+z,
            data:{id:z},
            cache: false,
            success:function(data2) {

                //  alert(data);

                $('#txtHint3').html(data2);


            }

        });
    }
</script>

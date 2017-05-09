

<?php foreach ($this->data['menu_by_id'] as $m){?>
<form method="post" action="<?php echo base_url()?>Menu/edit_menu_by_id/<?php echo $m->menuId?>">


        <div class="form-group">
            <label>Menu Name</label>
            <input class="form-control" type="text" name="menuname" value="<?php echo $m->menuName?>" >
        </div>


    <br>



        <div class="form-group">
            <div class="form-group " >
                <label>level (0=Main Menu | 1=Sub Menu | 2= Sub-Sub Menu | SO ON)</label>
                <input class="form-control " type="text" name="level" id="level" onkeyup="levelfunc()" >
            </div>
        </div>

        <div id="txtHint2"></div>





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



    function levelfunc() {
        var z = document.getElementById("level").value;

        $.ajax({
            type:'POST',
            url:'<?php echo base_url("Menu/dropdownmenu/")?>'+z,
            data:{id:z},
            cache: false,
            success:function(data) {

                //  alert(data);

                $('#txtHint2').html(data);
                //document.getElementById("old_page").style.display = "block";
                //document.getElementById("new_page").style.display = "none";

            }

        });
    }
</script>

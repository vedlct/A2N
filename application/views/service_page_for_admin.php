

<?php foreach ($this->data['all_services'] as $service){?>
    <form method="post" action="<?php echo base_url()?>Service/edit_service_for_admin" enctype="multipart/form-data">

        <input class="form-control " type="hidden" name="service_id" value="<?php echo $service->serviceId?>">

        <div class="form-group">
            <label>Service Name</label>
            <input class="form-control " type="text" name="service_head" value="<?php echo $service->serviceName?> ">
        </div>
        <div class="form-group">
            <label>Service banner</label>
            <textarea class="form-control " type="text" id="summernote18" name="service_banner" value="<?php echo $service->serviceBanner?> "></textarea>
        </div>
        <div class="form-group">
            <label>Service Summary</label>
            <textarea class="form-control " type="text" id="summernote17" name="service_summary" value="<?php echo $service->serviceSummary?> "></textarea>
        </div>
        <div class="form-group " >
            <label>Service details</label>
            <textarea class="form-control" id="summernote1" type="text" name="service_details"><?php echo $service->serviceDetails?></textarea>
        </div>
        <div class="form-group">
            <label>Page Image</label>
            <input class="form-control" type="file" name="pageImage" value="<?php echo $service->image?>" onchange="readURL(this);"
        </div>
        <br/>
        <div class="form-group " >
            <label>Design Class</label>
            <select class="form-control" name="service_design_class" id="service_design_class"  >
                <option selected  >Select Design</option>
                <?php
                foreach ($designclass_services as $p)
                {
                    echo "<option  value='" . $p->designClassId . "'>" . $p->designClassname . "</option>";
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Home Image</label>
            <input class="form-control" type="file" name="homeImage" value="<?php echo $service->imageHome?>" onchange="readURL(this);"
        </div>
        <br/>
        <div class="form-group " >
            <label>Added By</label>
            <input class="form-control" id="summernote2" type="text" name="service_quote" readonly value="<?php echo $service->addedBy?>">
        </div>
        <div class="form-group " >
            <label>Added Date</label>
            <input class="form-control" id="summernote2" type="text" name="service_quote" readonly value="<?php echo $service->addedDate?>">
        </div>
        <div class="form-group " >
            <label>Last Modified By</label>
            <input class="form-control" id="summernote2" type="text" name="service_quote" readonly value="<?php echo $service->lastModifiedBy?>">
        </div>
        <div class="form-group " >
            <label>Last Modified Date</label>
            <input class="form-control" id="summernote2" type="text" name="service_quote" readonly value="<?php echo $service->lastModifiedDate?>">
        </div>

        <input  class="btn btn-success " type="submit" value="Submit">

    </form>
<?php }?>



        <!-- end Head Section -->



<!--modal start-->
<!--modal end-->


<!-- /.container-fluid -->

<!-- /#page-wrapper -->

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>


<!-- summer note-->
<script>
    $(document).ready(function() {
        $('#summernote1').summernote();
    });
    $(document).ready(function() {
        $('#summernote18').summernote();
    });
    $(document).ready(function() {
        $('#summernote17').summernote();
    });
</script>
<script>
    $(function() {

        var pgurl = window.location.href;
        //substr(window.location.href.lastIndexOf("/")+1);

        //alert(pgurl);

        $(".side-nav li").each(function(){
            //alert($('a',this).attr("href"));

            if(pgurl==''){
                // alert("hello");
                $(".side-nav li:eq(1)").addClass("active");
            }else

            // alert( substr($('a',this).attr("href").lastIndexOf("/")+1))

            if($('a',this).attr("href") == pgurl || $('a', this).attr("href") == '')
                $(this).addClass("active");
        })
    });
</script>
<!-- end summer note -->



    <form method="post" action="<?php echo base_url()?>Service/add_new_service_details_header">


        <input class="form-control " type="hidden" name="id" value="<?php echo $id ?> ">

        <div class="form-group " >
            <label>Service details Header</label>
            <textarea class="form-control" id="summernote11" type="text" name="service_details_big"></textarea>
        </div>


        <input  class="btn btn-success " type="submit" value="Submit">

    </form>

    <script>

        $(document).ready(function() {
            $('#summernote11').summernote();
        });
    </script>
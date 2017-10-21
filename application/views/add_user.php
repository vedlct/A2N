<!DOCTYPE html>
<html lang="en">

<head>





</head>

<body>

                            <form method="post" action="<?php echo base_url()?>User/insert_user">

                                <div class="row" >
                                <div class="col-md-6 col-sm-6" >
                                <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="userTitle" value="" >
                                </div>
                                </div>

                                    <div class="col-md-6 col-sm-6" >
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" type="text" name="first_name" value="" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row" >


                                    <div class="col-md-6 col-sm-6" >
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="last_name" value="" >
                                </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="text" name="password" value="" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-md-6 col-sm-6" >
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" name="phone_number" value="" >
                                </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6" >
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text" name="email" value="" >
                                </div>
                                    </div>
                                </div>


                                <input class="btn btn-success" type="submit" value="submit">

                            </form>



</body>

</html>

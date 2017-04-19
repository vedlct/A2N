<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>A2N</title>
		<meta name="description" content="Responsive Multi-Level Menu: Space-saving drop-down menu with subtle effects" />
		<meta name="keywords" content="multi-level menu, mobile menu, responsive, space-saving, drop-down menu, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/component.css" />
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="<?php echo base_url()?>js/modernizr.custom.js"></script>
	</head>
	<body>


		<div class="container demo-4">	
            <div class="row">            	
                		

				<div class="col-md-3">
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">


                            <li><a href="<?php echo base_url()?>About_us">about_us</a></li>
                            <li><a href="<?php echo base_url()?>Service">Service</a></li>
                            <?php foreach ($menu as $m){?>
                                <li>
                                <?php if($m->parent_id == 0){
                                    $id=$m->menu_id?>
                                    <a href="#"><?php echo $m->name?></a>
                                    <ul class="dl-submenu">
                                        <?php foreach ($menu as $m){
                                        $query = $this->db->query("SELECT * FROM `menu` WHERE menu_id='$id'");
                                        foreach ($query->result() as $q){$menu_id=$q->menu_id;}
                                        if($m->parent_id == $menu_id){ ?>

                                        <li>
                                            <a href="#"><?php echo $m->name; }}?></a>
                                        </li>
                                    </ul>
                                    </li>
                                <?php } } ?>

						</ul>
					</div><!-- /dl-menuwrapper -->
				</div><br>

                
                <div class="col-md-9">
                    <h1 style="text-align:center"> <?php  foreach ($header as $h) {echo $h->details;}?></h1>
                </div>	     
            </div>
            
            <div class="row service-heading">
            	<div class="col-md-3">

                	<h3><b>SERVICES AND SOLUTIONS</b></h3>

                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                	<h3 style="color:#bbbbbb; float:right"><b><?php  foreach ($service_header as $s) {echo $s->name;}?></b></h3>
                </div>
            
            </div>


            
            <div class="row service-box-custom-width">
            	<?php  foreach ($services as $s) { ?>
                    <a href="#">
                        <div class="col-md-3 service-box <?php echo $s->design_class;?>">
                            <img class="img-responsive service-image"
                                 src="<?php echo base_url() ?>images/<?php echo $s->image;?>">
                            <h2><?php echo $s->service_name;?></h2>
                            <p class="service-text"><?php echo $s->details;?></p>
                        </div>
                    </a>

                    <?php
                }
                ?>
            </div>
            
            
            
            <div class="row service-heading">
            	<div class="col-md-3">
                	<h3><b>LATEST PROJECTS</b></h3>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                	<h3 style="color:#bbbbbb; float:right"><b><?php  foreach ($project_header as $p) {echo $p->name;}?></b></h3>
                </div>
            
            </div>

            <button id="left-button">
                swipe left
            </button>
            <div class="row service-box-custom-width" style="overflow-x: scroll;" id="content">
                <?php foreach ($projects as  $p) { ?>
                    <a href="<?php echo base_url()?>Project/project_details/<?php echo $p->project_id?>">
                        <div class="col-md-3 service-box <?php echo $p->design_class ?>" style="background-image:url(<?php base_url()?> images/<?php echo $p->image ?>); display: inline-block;">

                        </div>
                    </a>
                    <?php
                }
                ?>

            </div>
            <button id="right-button">
                swipe right
            </button>
            

		</div><!-- /container -->
        
        <footer>
        	<div class="container">
            	<div class="row">
                	<div class="col-md-3">
                    	<h2>IT Craft by the Numbers</h2>

                        <ul>
                        	<li>We provide outsourced software development services to over 50 active clients from 21 countries</li>
                            <li>238 employees and growing</li>
                            <li>15 successful years in business and looking forward to many more</li>
                        </ul>
                        
                        <p>
                        	<a href="#"><i class="fa fa-google-plus-square footer-social-icon" aria-hidden="true"></i></a>&nbsp;
                         	<a href="#"><i class="fa fa-facebook-square footer-social-icon" aria-hidden="true"></i></a>&nbsp;
                         	<a href="#"><i class="fa fa-linkedin-square footer-social-icon" aria-hidden="true"></i></a>&nbsp;
                        </p>
                    </div>
                    <div class="col-md-3">
                    	<h2>We are globally present</h2>
                        <ul>
                        	<p>USA: +1-212-726-4422<br>
                            Canada: +1-519-362-8426<br>
                            Germany: +49-1575-366-91-79</p>
                            <p>For more information email us <a href="#">site@itechcraft.com</a></p>
                            <p>Contact us! The next success story will be yours.</p>
                        </ul>
                    </div>
                    <div class="col-md-3">
                    	<h2>We provide software programming services to</h2>
                        <ul>
                        	<a href="#"><li>Startups</li></a>
                            <a href="#"><li>Digital Agencies</li></a>
                            <a href="#"><li>Indoor Positioning</li></a>
                            <a href="#"><li>Logistics and Supply Chain</li></a>
                            <a href="#"><li>Outdoor Navigation</li></a>
                        </ul>
                    </div>
                    <div class="col-md-3">
                    	<h2>Expertise</h2>
                        <p>iOS / Android / HTML5
/PHP/ ASP.Net / C# / J2ME
Microsoft Dynamics CRM / Zend / Titanium / PhoneGap /
Magento / WordPress / LAMP / Xamarin / AngularJS / NodeJS / Development for iBeacons, Drones, AppleTV,
…long lists are boring, so feel
free to send us a request to
site@itechcraft.com</p>
                    </div>
                </div>
            </div>
        </footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>


            $('#right-button').click(function() {
              //  alert('hello');
            event.preventDefault();
            $('#content').animate({
                scrollLeft: "+=300px"
            }, "slow");
            });

            $('#left-button').click(function() {
                //alert("hello");
                event.preventDefault();
                $('#content').animate({
                    scrollLeft: "-=300px"
                }, "slow");
            });
        </script>
		<script src="<?php echo base_url()?>js/jquery.dlmenu.js"></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-3', classout : 'dl-animate-out-3' }
				});
			});
		</script>

	</body>
</html>
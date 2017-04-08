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
							<li>
								<a href="#">Fashion</a>
								<ul class="dl-submenu">
									<li>
										<a href="#">Men</a>
										<ul class="dl-submenu">
											<li><a href="#">Shirts</a></li>
											<li><a href="#">Jackets</a></li>
											<li><a href="#">Chinos &amp; Trousers</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">T-Shirts</a></li>
											<li><a href="#">Underwear</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Women</a>
										<ul class="dl-submenu">
											<li><a href="#">Jackets</a></li>
											<li><a href="#">Knits</a></li>
											<li><a href="#">Jeans</a></li>
											<li><a href="#">Dresses</a></li>
											<li><a href="#">Blouses</a></li>
											<li><a href="#">T-Shirts</a></li>
											<li><a href="#">Underwear</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Children</a>
										<ul class="dl-submenu">
											<li><a href="#">Boys</a></li>
											<li><a href="#">Girls</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Electronics</a>
								<ul class="dl-submenu">
									<li><a href="#">Camera &amp; Photo</a></li>
									<li><a href="#">TV &amp; Home Cinema</a></li>
									<li><a href="#">Phones</a></li>
									<li><a href="#">PC &amp; Video Games</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Furniture</a>
								<ul class="dl-submenu">
									<li>
										<a href="#">Living Room</a>
										<ul class="dl-submenu">
											<li><a href="#">Sofas &amp; Loveseats</a></li>
											<li><a href="#">Coffee &amp; Accent Tables</a></li>
											<li><a href="#">Chairs &amp; Recliners</a></li>
											<li><a href="#">Bookshelves</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Bedroom</a>
										<ul class="dl-submenu">
											<li>
												<a href="#">Beds</a>
												<ul class="dl-submenu">
													<li><a href="#">Upholstered Beds</a></li>
													<li><a href="#">Divans</a></li>
													<li><a href="#">Metal Beds</a></li>
													<li><a href="#">Storage Beds</a></li>
													<li><a href="#">Wooden Beds</a></li>
													<li><a href="#">Children's Beds</a></li>
												</ul>
											</li>
											<li><a href="#">Bedroom Sets</a></li>
											<li><a href="#">Chests &amp; Dressers</a></li>
										</ul>
									</li>
									<li><a href="#">Home Office</a></li>
									<li><a href="#">Dining &amp; Bar</a></li>
									<li><a href="#">Patio</a></li>
								</ul>
							</li>

						</ul>
					</div><!-- /dl-menuwrapper -->
				</div>  
                
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
            
            <div class="row service-box-custom-width">
                <?php foreach ($projects as  $p) { ?>
                    <a href="#">
                        <div class="col-md-3 service-box <?php echo $p->design_class ?>" style="background-image:url(<?php base_url()?> images/<?php echo $p->image ?>);">

                        </div>
                    </a>
                    <?php
                }
                ?>

            </div>
            

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
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
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/component.css" />
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="<?php echo base_url()?>js/modernizr.custom.js"></script>

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="<?php echo base_url()?>css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>css/owl.theme.default.min.css">
	</head>
	<body>


		<div class="container demo-4">	
            <div class="row" style="margin-bottom:20px">            	           	
                <?php $this->load->view('menu_bar'); ?>
                
                <div class="col-md-9">
                    <img class="pull-right" width="130" src="<?php echo base_url()?>/images/logo.png">
                </div>	     
            </div>
            
            <div class="row" style="margin-bottom:30px"> 
            	<div class="col-md-1"></div>           	
                <div class="col-md-10" style="z-index:-1">
                    <h1 style="text-align:center"> WE PROVIDE <strong>OUTSOURCED SOFTWARE DEVELOPMENT SERVICES</strong> TO OVER 50 ACTIVE CLIENTS FROM 21 COUNTRIES</h1>
                </div>	 
                <div class="col-md-1"></div>     
            </div>
            
            <div class="row service-heading">
            	<div class="col-md-3" style="z-index:-1">

                	<h3><b>SERVICES AND SOLUTIONS</b></h3>

                </div>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                	<h3 style="color:#bbbbbb; float:right"><b>OUR CORE SERVICES ARE WEB PROGRAMMING AND MOBILE PROGRAMMING</b></h3>
                </div>
            
            </div>


            
            <div class="row service-box-custom-width owl-carousel owl-theme" >
            	<?php  foreach ($get_all_services as $s) { ?>

                    <a href="<?php echo base_url()?>Service/show_service/<?php echo $s->serviceId?>">
                        <div class="col-md-12 service-box <?php echo $s->designClassname;?>">
                            <img class="img-responsive service-image"
                                 src="<?php echo base_url() ?>images/<?php echo $s->imageHome;?>">
                            <h2><?php echo $s->serviceName;?></h2>
                            <p class="service-text"><?php echo $s->serviceSummary;?></p>
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
                	<h3 style="color:#bbbbbb; float:right"><b>For our clients we developed applications used by companies like Intel and Pepsi. So, what you can see here is only the tip of the iceberg...</b></h3>
                </div>
            
            </div>

            <div class="row service-box-custom-width owl-carousel owl-theme" >
                <?php foreach ($get_all_projects as  $p) { ?>
               <div>

                    <a href="<?php echo base_url()?>Project/project_details/<?php echo $p->projectId?>">
                        <div class="col-md-12 service-box <?php echo $p->designClassname ?>" style="background-image:url(<?php echo base_url()?>images/<?php echo $p->imageHome ?>); ">

                        </div>
                    </a>
               </div>
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
                            <p>For more information email us <a href="#">info@a2n.com</a></p>
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
info@a2n.com</p>
                    </div>
                </div>
            </div>
        </footer>
<!--		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->



        <!-- Owl Carousel JS -->

        <script src="<?php echo base_url()?>js/owl.carousel.min.js"></script>

        <script>
            $(document).ready(function(){
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:true
                        },
                        600:{
                            items:3,
                            nav:false
                        },
                        1000:{
                            items:4,
                            nav:true,
                            loop:false
                        }
                    }
                });
            });

        </script>

	</body>
</html>
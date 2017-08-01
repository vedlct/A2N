<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About A2N</title>
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
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/component.css" />

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>js/modernizr.custom.js"></script>

</head>
<body>
<div class="container-fluid demo-4" style="background:url(<?php echo base_url()?>images/about-us-bg.jpg) no-repeat center center; background-size:cover">
    <div class="container">
        <div class="row" >

            <?php $this->load->view('menu_bar');?>

            <div class="col-md-9 about_us_header">
                <?php foreach ($page_content as $aus){?>
                <h1> <span><?php echo $aus->pageTitle ?></span></h1>
                <?php } ?>
            </div>
        </div>
        <div class="row about_us_sections ">
            <div class="col-md-12">
                <?php foreach ($page_content as $aus){?>
                <p style="color:#E5E4E2"> <?php echo $aus->pageSummary ?>
                    <?php } ?>
                    <br><br>
<!--                    <span style="font-size:25px; font-weight:bold">"--><?php //echo $aus->quote ?><!--"</span></p>-->
            </div>
        </div>
    </div>

</div>


<div class="container-fluid color_background">
    <div class="container">
        <div class="row about_us_sections">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ($page_content as $aus){?>
                        <p><?php echo $aus->pageContent ?></p>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--<div class="container">-->
<!--    <div class="row about_us_sections">-->
<!--        --><?php //foreach ($about_banner as $ausbanner){?>
<!--            <div class="col-md-6">-->
<!--                <h1>--><?php //echo $ausbanner->header ?><!--</h1>-->
<!---->
<!--                <p>--><?php //echo $ausbanner->details ?><!--</p>-->
<!--            </div>-->
<!--        --><?php //} ?>
<!--    </div>-->
<!--</div>-->


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

</body>
</html>
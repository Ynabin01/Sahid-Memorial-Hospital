<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahid Memorial Hospital</title>

    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900|Work+Sans:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<header class="header_fixed">


    <div class="business_bliss_main_header ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-7 logo">
                    <div class=" site-branding">
                        <a href="index.php" class="custom-logo-link"><img width="290" height="50" src="images/logo.png" class="custom-logo" alt="Sahid Memorial Hospital" ></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="main-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i
                                class="fa fa-bars"></i></button>

                        <div class="main-menu-container-collapse">
                            <ul id="primary-menu" class="menu nav-menu right" aria-expanded="false">
                                <li>  <a href="/">Home</a> </li>
                                <li><a href="/about">About Us</a> </li>
                                <li><a href="/ourservices">Services</a> </li>
                                <li><a href="/department-main">Department</a> 
                                    <ul>
                                        <li><a href="department">Neurology Department</a></li>
                                        <li><a href="department">Cardiology Department</a></li>
                                        <li><a href="department">Pathology Department</a></li>
                                        <li><a href="department">Laboratory Department</a></li>
                                        <li><a href="department">Pediatric Department</a>
                                        </li><li><a href="department">Cardiac Department</a></li>
                                    </ul>
                                </li>
                                <li><a href="/doctors">Doctors</a> </li>
                                <li><a href="/newsevent">News & Event</a> </li>
                                <li> <a href="/contactus">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


@yield('content')

<!---------slider.blade.php------->
<!------ourservices.blade.php----->
<!------sahidservices.blade.php---->
<!------sahidteam.blade.php-------->
<!---------ourstatics.blade.php----->


<!---------latestnews.blade.php------->
<!-------sahidtestimonial.php------>
<!-------sahidcontactdetails.blade.php------>



<div class="hot-line">
    <div class="icon"><i class="fas fa-phone-volume"></i></div>
    <div class="content">
        <h3>Hotline: 1147</h3>
        <p>For emergency medical service, ambulance care with paramedics</p>
    </div>
</div>

<footer class="layout_two site-footer">
    <div class="footer-main">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-sm-6">
                    <div id="text-2" class="widget widget_about">
                        <div class="aboutwidget">
                            <div class="site-branding">
                                <!-- <a href="#" class="custom-logo-link"><img width="290" height="50" src="images/logo_light.png" class="custom-logo" alt="logo" ></a>-->
                                <h2 class="site-title">
                                    Sahid Memorial Hospital
                                </h2>

                            </div>
                            <p>Making a nation prosperous is possible only through its healthy citizens. The primary
                                responsibilities of any state include the extension of affordable, reliable and modern
                                technology based quality health service to the public. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div id="nav_menu-2" class="widget widget_nav_menu">
                        <h3 class="widget-title">Services</h3>
                        <div class="menu-useful-links-container">
                            <ul id="menu-useful-links" class="menu">
                                <li><a href="#">24 hours Emergency</a>
                                <li><a href="#">Intense Care Unit</a>
                                <li><a href="#">Operation Theater</a>
                                <li><a href="#">Medical Counselling</a>
                                <li><a href="#">Mental Disease</a>
                                <li><a href="#">Physiotherapy</a>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div id="nav_menu-2" class="widget widget_nav_menu">
                        <h3 class="widget-title">Our Services</h3>
                        <div class="menu-useful-links-container">
                            <ul id="menu-useful-links" class="menu">
                                <li><a href="#">Home</a>
                                <li><a href="#">About Us</a>
                                <li><a href="#">Services</a>
                                <li><a href="#">Gallery</a>
                                <li><a href="#">Mission & Vission</a>
                                <li><a href="#">Contact Us</a>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div id="text-2" class="widget widget_text">
                        <h3 class="widget-title">Contact Us</h3>
                        <div class="textwidget">
                            <ul class="footer-info">
                                <li>977-01-5218921, 5219934, 5219935</li>
                                <li>info@sahidhospitalkalanki.com</li>
                                <li>Kalanki–14, Kathmandu, Nepal</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <div class="lower-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class=text-center>©2022 Sahid Memorial Hospital </p>

                </div>
            </div>
        </div>
    </div>
</footer>


<script src="js/vendor/jquery.min.js"></script>

<script src="js/vendor/bootstrap.js"></script>
<script src="js/vendor/owl.carousel.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="js/vendor/jquery.counterup.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="vGraphic.css" rel="stylesheet" type="text/css">
<link href="whatsApp.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        min-height: 100%;
    }
    .w3-bar .w3-button {
        padding: 16px;
    }




    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
        background-color: #f2f2f2;
        padding: 25px;
    }

    .carousel-inner img {
        width: 100%; /* Set width to 100% */
        margin: auto;
        min-height:200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
        .carousel-caption {
            display: none;
        }
    }

</style>
<body>

<!-- Navbar (sit on top) -->
<?php include 'header1.php';?>


<!-- Header with full-height image -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!--

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


        <div class="item active">
            <img src="img/slider/img13.jpg" alt="Image">
            <div class="carousel-caption">
                <h3 style="font-weight: bolder;">WE ARE HERE</h3>
                <h1 style="font-weight: bolder;">TO MAKE ANYTHING YOU WANT</h1>
                <button type="button" class="btn btn-primary">REQUEST A QUOTE</button>
            </div>
        </div>

        <div class="item">
            <img src="img/slider/img1.jpg" alt="Image">
            <div class="carousel-caption">
                <h3 style="font-weight: bolder;">WE ARE HERE</h3>
                <h1 style="font-weight: bolder;">TO MAKE ANYTHING YOU WANT</h1>
                <button type="button" class="btn btn-primary">REQUEST A QUOTE</button>
            </div>
        </div>

        <div class="item">
            <img src="img/slider/slide-2.jpg" alt="Image">
            <div class="carousel-caption">
                <h3 style="font-weight: bolder;">WE ARE HERE</h3>
                <h1 style="font-weight: bolder;">TO MAKE ANYTHING YOU WANT</h1>
                <button type="button" class="btn btn-primary">REQUEST A QUOTE</button>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- How we work  -->
    <div class="container-fluid text-center">
        <h3 style="font-weight: bolder;color:darkslategrey;">How We Work</h3>
        <div class="row">
            <div class="col-sm-2">
                <img src="img/logo/idea.png">
                <h5 style="font-weight: bold;">
                    IDEA
                </h5>
            </div>
            <div class="col-sm-2">
                <img src="img/logo/3dCAD.png">
                <h5 style="font-weight: bold;">3D CAD<br>
                    Model in<br>
                    STL Format</h5>
            </div>
            <div class="col-sm-2">
                <img src="img/logo/stlUPload.png">
                <h5 style="font-weight: bold;">
                    Upload
                    Design STL
                    Files on
                    website or<br>
                    email it to us
                </h5>
            </div>
            <div class="col-sm-2">
                <img src="img/logo/getQUta.png">
                <h5 style="font-weight: bold;">
                    Get Quotation
                </h5>
            </div>
            <div class="col-sm-2">
                <img src="img/logo/3dadative.png">
                <h5 style="font-weight: bold;">
                    3D Printing<br>
                    Additive
                    manufacturing
                    your product
                </h5>
            </div>
            <div class="col-sm-2">
                <img src="img/logo/delivery.png">
                <h5 style="font-weight: bold;">
                    Delivery
                </h5>
            </div>

        </div>

    </div>

    <!--  -->
<hr>
    <!-- PRODUCTIOn  -->
    <div class="container-fluid text-center">
        <h3 style="font-weight: bolder;color:darkslategrey;">Prototype Your Product</h3>
        <div class="row">
            <div class="col-sm-2">
                <img src="img/New%20folder/material.png" style="height: 150px;">
                <h5 style="font-weight: bold;">Material</h5>
                <h5>
                    Select materials
                    from a wide<br>
                    variety in plastics,<br>
                    metals, metal
                    alloys and plastic
                    composites
                </h5>
            </div>
            <div class="col-sm-2">
                <img src="img/New%20folder/quality.png"  style="height: 150px;">
                <h5 style="font-weight: bold;">Quality</h5>
                <h5 >We don’t<br>
                    compromise on
                    part / product
                    quality</h5>
            </div>
            <div class="col-sm-2">
                <img src="img/New%20folder/price.png" style="height: 150px;">
                <h5 style="font-weight: bold;">Price </h5>
                <h5>
                    We provide the
                    best competitive
                    price compared
                    to any other
                    competitor in
                    India and world
                    3D printing
                    market.
                </h5>
            </div>
            <div class="col-sm-2">
                <img src="img/New%20folder/profuction.png" style="height: 150px;">
                <h5 style="font-weight: bold;">Production</h5>
                <h5>
                    We manufacture all
                    products at a time
                    and help reduce the
                    manufacturing time
                    and cost while
                    maintaining the
                    optimum part quality
                </h5>
            </div>
            <div class="col-sm-2">
                <img src="img/New%20folder/delivery.png" style="height: 150px;">
                <h5 style="font-weight: bold;">Delivery all
                    over India </h5>
                <h3>

                </h3>
            </div>
            <div class="col-sm-2">
                <img src="img/New%20folder/world.png" style="height: 150px;">
                <h5 style="font-weight: bold;">World wide
                    delivery</h5>
                <h3>

                </h3>
            </div>

        </div>

    </div>

    <!--  -->
    <!-- Promo Section "Statistics" -->

    <div class="w3-container w3-row w3-center " style="background-color: #f2f2f2;">
        <h3 class="text-center" style="font-weight: bold;color: darkslategrey;">Statistics </h3>
        <div class="w3-quarter w3-padding-44">
            <span class="w3-xxlarge">14+</span>
            <br><b>Partners</b>
        </div>
        <div class="w3-quarter w3-padding-44">
            <span class="w3-xxlarge">55+</span>
            <br><b>Projects Done</b>
        </div>
        <div class="w3-quarter w3-padding-44">
            <span class="w3-xxlarge">89+</span>
            <br><b>Happy Clients</b>
        </div>
        <div class="w3-quarter w3-padding-44">
            <span class="w3-xxlarge">150+</span>
            <br><b>Meetings</b>
            <br><br><br><br>
        </div>

    </div>



    <!-- About Section -->
    <div class="w3-container"  id="about">
        <h3 class="w3-center" style="font-weight: bold; color: darkslategrey;">Our Clients</h3>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-quarter">
             <img src="img/banner2.jpg" class="img-circle" style="height: 100px;width: 150px;">
            </div>
            <div class="w3-quarter">
                <img src="img/banner2.jpg" class="img-circle" style="height: 100px;width: 150px;">
            </div>
            <div class="w3-quarter">
                <img src="img/banner2.jpg" class="img-circle" style="height: 100px;width: 150px;">
            </div>
            <div class="w3-quarter">
                <img src="img/banner2.jpg" class="img-circle" style="height: 100px;width: 150px;">
            </div>
        </div>
    </div>
<br>

    <!-- Contact Section -->
    <div class="container-fluid"  id="contact">
        <h3 class="w3-center" style="color: darkslategrey;font-weight: bolder;" >CONTACT</h3>

        <div class="row" style="background-color: #bbbbbb;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.2523532716305!2d75.31352311425753!3d19.871563331647998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb99e84cc7f4e7%3A0x8ef52048513cb04!2sIPRO3D+Technologies+LLP!5e0!3m2!1sen!2sin!4v1534930979184" style="width:100%;" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="row text-center w3-black">

            <div class="col-sm-3">
                <h3>Our Services</h3>
                <h5>3D Printing</h5>
                <h5>3D Scanning</h5>
                <h5>2D & 3D design services</h5>
                <h5>Design for 3D Printing</h5>
                <h5>Many more services…..</h5>

            </div>

            <div class="col-sm-3">
               <br><br>
                <h5><b>IPRO3D TECHNOLOGIES LLP</b><br>
                    Incubation Office<br>
                    <b>IPRO3D TECHNOLOGIES LLP,</b><br>
                    C/O Er. Yogesh Pawar,<br>
                    Workstation-1, MAGIC, CMIA office,<br>
                    Bajaj Bhavan, Near MIDC office,<br>
                    Railway Station Road, Aurangabad,<br>
                    Maharashtra, India.<h5>

            </div>
            <div class="col-sm-3">
               <br><br>
              <h5>
                  <b>Corporate office Manufacturing Facility</b><br>
                Address:<br>
                  <b>IPRO3D TECHNOLOGIES LLP,</b><br>
                C/O Er. Yogesh Pawar,<br>
                Meridian Status-B, F-7,<br>
                Near Youth Hostel, Kesarsingpura,<br>
                Aurangabad-431005, Maharashtra,<br>
                India.<br>

              </h5>
            </div>


            <div class="col-sm-3">
                <br><br><br>
                <div class="w3-xxlarge">
                    <i class="fa fa-facebook-official w3-hover-opacity"></i>
                    <i class="fa fa-instagram w3-hover-opacity"></i>
                    <i class="fa fa-snapchat w3-hover-opacity"></i>
                    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                    <i class="fa fa-twitter w3-hover-opacity"></i>
                    <i class="fa fa-linkedin w3-hover-opacity"></i>
                </div>
                <h4 style="background-color: gray">Mobile : +91 9821413663</h4>
                <h4>Email : hello@ipro3d.io</h4>
            </div>
        </div>
    </div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

</body>
</html>

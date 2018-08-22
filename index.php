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

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <img src="img/banner1.jpg" alt="Image">
            <div class="carousel-caption">
                <!-- <h1>MAHARASHTRA VOCATIONAL TRAINING CENTER</h1>
                 <p> Affiliated to Maharashtra State Board of Vocational Education Examination, Mumbai </p>
                 <h3>Institute Code: 170523</h3> -->
            </div>
        </div>

        <div class="item">
            <img src="img/banner2.jpg" alt="Image">
            <div class="carousel-caption">
                <!--<h1>MAHARASHTRA VOCATIONAL TRAINING CENTER</h1>
                <p> Affiliated to Maharashtra State Board of Vocational Education Examination, Mumbai </p>
                <h3>Institute Code: 170523</h3> -->
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

    <!-- About Section -->
    <div class="w3-container" style="padding:128px 16px" id="about">
        <h3 class="w3-center">ABOUT THE COMPANY</h3>
        <p class="w3-center w3-large">Key features of our company</p>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-quarter">
                <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
                <p class="w3-large">Responsive</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Passion</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Design</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Support</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
    </div>

    <!-- Promo Section "Statistics" -->
    <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
        <div class="w3-quarter">
            <span class="w3-xxlarge">14+</span>
            <br>Partners
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">55+</span>
            <br>Projects Done
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">89+</span>
            <br>Happy Clients
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">150+</span>
            <br>Meetings
        </div>
    </div>



    <!-- Contact Section -->
    <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
        <h3 class="w3-center">CONTACT</h3>
        <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
        <div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-half">

                <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>
                    <br>
                    IPRO3D TECHNOLOGIES LLP<br>
                    Incubation Office<br>
                    IPRO3D TECHNOLOGIES LLP,<br>
                    C/O Er. Yogesh Pawar,<br>
                    Workstation-1, MAGIC, CMIA office,<br>
                    Bajaj Bhavan, Near MIDC office,<br>
                    Railway Station Road, Aurangabad,<br>
                    Maharashtra, India.</p>

                <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>
                    <br>
                    Corporate office Manufacturing Facility<br>
                    Address:<br>
                    IPRO3D TECHNOLOGIES LLP,<br>
                    C/O Er. Yogesh Pawar,<br>
                    Meridian Status-B, F-7,<br>
                    Near Youth Hostel, Kesarsingpura,<br>
                    Aurangabad-431005, Maharashtra,<br>
                    India.<br>
                </p>
                <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Mobile : +91 9821413663 </p>
                <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: hello@ipro3d.io</p>
                <br>

            </div>
            <div class="w3-half">
                <!-- Add Google Maps -->
                <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Our Services</h1>
                    <h5>3D Printing</h5>
                    <h5>3D Scanning</h5>
                    <h5>Vacuum resin casting</h5>
                    <h5>Soft tooling manufacturing</h5>
                    <h5>2D & 3D design services</h5>
                    <h5>Design for 3D Printing</h5>
                    <h5>Design topology optimization</h5>
                    <h5>X-ray tomography</h5>
                    <h5>Small Batch production</h5>
                    <h5>CNC machining</h5>
                    <h5>Many more services…..</h5>

                </div>

                <div class="col-sm-6">
                    <div class="w3-xxlarge w3-section">
                        <i class="fa fa-facebook-official w3-hover-opacity"></i>
                        <i class="fa fa-instagram w3-hover-opacity"></i>
                        <i class="fa fa-snapchat w3-hover-opacity"></i>
                        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                        <i class="fa fa-twitter w3-hover-opacity"></i>
                        <i class="fa fa-linkedin w3-hover-opacity"></i>
                    </div>


                </div>


            </div>


        </div>
        <!--

            <p>Powered by <a href="https://www.mit.asia" title="W3.CSS" target="_blank" class="w3-hover-text-green">MIT COllege,Aurangabad</a></p>
            -->
    </footer>

    <!-- Add Google Maps -->
    <script>
        function myMap()
        {
            myCenter=new google.maps.LatLng(41.878114, -87.629798);
            var mapOptions= {
                center:myCenter,
                zoom:12, scrollwheel: false, draggable: false,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }


        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");

        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

</body>
</html>

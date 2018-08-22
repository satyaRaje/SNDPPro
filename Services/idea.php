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

    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    body, html {
        height: 100%;
        line-height: 1.8;
    }
    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("img/jk-001 copy.png");
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
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="#home" class="" style="margin-left: 2px;"><img src="img/logo.png"></a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
            <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
            <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
            <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
            <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
        </div><div id="myCarousel" class="carousel slide" data-ride="carousel">

   	
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

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

		
		
		
		
	
 
   
 <h3 class="w3-center">IDEA & SOLUTION</h3>
<ul>
 	<li><strong>lf you're not that much of a designer, we offer design service and technical support so you can design your own products, with the precision of a professional designer.</strong></li>
</ul>

<ul>
 	<li><strong>Our team helps you make your product form idea stage to finished product/Solution. Our team guides you in achieving your goals. We at IPRO3D are a very passionate team of engineers and doctor.</strong></li>
</ul>
&nbsp;


 
  
		




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

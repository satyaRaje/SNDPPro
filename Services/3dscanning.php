<!DOCTYPE html>
<html>
<title>IPRO3D-ABOUT_US-Authentic</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="vGraphic.css" rel="stylesheet" type="text/css">
<link href="whatsApp.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


<style>
    .w3-sidebar a {font-family: "Roboto", sans-serif}
    body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">
<?php include '../header.php';?>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
<div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold;margin-top:60px">
       <?php include 'services_link.php';?>
    </div>
</nav>

<!-- Top menu on small screens -->

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:83px"></div>

    <!-- Top header -->
      <div class="container" align="left" style="margin:20px 50px">
           <div class="row">
           </br>
		   </br>
           <h4><b>Scanning</b></h4>
           </div>
      </div>
<div class="container-fluid" align="left" style="margin:0px 0px">
 <div class="row">
<div id="myCarousel" class="carousel slide" data-ride="carousel" >

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>	
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
   </div>	  
</div>
</div>  
	  
      <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           <p>It is a contactless, non-destructive technology that helps digitally captures the surface shape of a physical object by using a line of laser light or by superimposing several images files in real time. </br></br>
		  </br> 3D scanners create cloud point of data from the surface of an object and collectively compiles the data to provide a 3d digital output in form of an STL file. </br>3D scanning is also a way to capture a physical object with exact size and shape into digital file the computer can read data digitally from the 3D representation of the Object. </br></br>
		   There are Different 3d scanners and 3d scanning techniques for different applications like industrial, novelty, architecture, reverse engineering, etc. </br></br>

</br></br>


           </div>
      </div>
	  <!-- Footer -->
    <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">



    </footer>



    <!-- End page content -->
</div>

<!-- Newsletter Modal -->

<script>
    // Accordion
    function myAccFunc() {
        var x = document.getElementById("demoAcc");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // Click on the "Jeans" link on page load to open the accordion for demo purposes
    document.getElementById("myBtn").click();


    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>

</body>
</html>

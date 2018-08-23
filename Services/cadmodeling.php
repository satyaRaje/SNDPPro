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

<body style="background-color: whitesmoke;color: darkslategrey;">
<?php include '../header.php';?>
<br><br><br>
      <div class="container">
           <div class="row">
           <h3 style="text-align: center; "><b>3D and 2D CAD Modelling/Designing:</b></h3>
               <div id="myCarousel" class="carousel slide" data-ride="carousel">

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
	

	  
	  
	  
      <div class="container">
           <div class="row" style="font-weight: bolder;">
           3D and 2d Computer Aided Designing is a technology for designing and technical documentation for parts/models, which replaces manual drafting process. It is widely used by architects, engineers, and other professionals. 3D CAD modeling provides an extra dimension to precisely visualize and share designs concepts and iterate it many times in real time.</br></br>
           </div>
      </div>
	  <!-- Footer -->

 <div class="container-fluid">
     <div class="row">
         <?php include '../footer.php';?>
     </div>
 </div>

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

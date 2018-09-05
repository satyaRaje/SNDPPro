<!DOCTYPE html>
<html>
<title>IPRO3D-3DScanning</title>
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


<body style="background-image:url('../temp-img/b1.png');">
<?php include '../header.php';?>

<br><br><br>
    <?php include 'services_link.php';?>

<!-- Sidebar/menu -->
<br><br>
      <div class="container">
           <div class="row">
           <h2 style="text-align: center;"><b>3D Scanning</b></h2>
               <br>
               <div id="myCarousel" class="carousel slide" data-ride="carousel" >

                   <!-- Indicators -->
                   <ol class="carousel-indicators">
                       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#myCarousel" data-slide-to="1"></li>
                   </ol>
                   <div class="carousel-inner" role="listbox">

                       <div class="item active">
                           <img src="../temp-img/img25.jpg" alt="Image" style="height: 373px ;width: 1024px">
                           <div class="carousel-caption">
                               </div>
                       </div>

                       <div class="item">
                           <img src="../temp-img/img5.jpg" alt="Image" style="height: 373px ;width: 1024px">
                           <div class="carousel-caption">
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
<br><br>
      <div class="container">
           <div class="row" style="padding: 20px;">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is a contactless, non-destructive technology that helps digitally captures the surface shape of a physical object by using a line of laser light or by superimposing several images files in real time.
		   3D scanners create cloud point of data from the surface of an object and collectively compiles the data to provide a 3d digital output in form of an STL file. </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3D scanning is also a way to capture a physical object with exact size and shape into digital file the computer can read data digitally from the 3D representation of the Object. </br>
		   There are Different 3d scanners and 3d scanning techniques for different applications like industrial, novelty, architecture, reverse engineering, etc. </br></br>

           </div>
      </div>
	  <!-- Footer -->
<div class="conntainer-fluid">
    <div class="row">
        <?php include '../footer.php';?>
    </div>

</div>
<script>
    $(document).ready(function(){
        $("#menu_flip").click(function(){
            $("#menu_panel").slideToggle("slow");
        });

    });
</script>


</body>
</html>



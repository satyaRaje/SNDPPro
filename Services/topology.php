<!DOCTYPE html>
<html>
<title>IPRO3D-Topology</title>
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


<body class="" style="">
<?php include '../header.php';?>
<br><br><br>

<div id="menu_flip" >
    <button class="btn btn-primary">More Menu</button>
</div>
<div id="menu_panel">
    <?php include 'services_link.php';?>
</div>

<br><br><br>
<div class="container">
    <div class="row">
        <h2 style="text-align: center;"><b>Design Topology Optimization</b></h2>
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


        <div class="container" align="left" style="margin:0px 50px">
           <div class="row">
           Topology optimization is a mathematical modeling approach that can optimizes material layouts digitally and simulate various iterations for within a given set of design space, for a given set of loads and boundary conditions such that the resulting layout meets a prescribed set of performance that targets to optimize the overall end result.</br></br>
		   The topology optimization technique is a very helpful tool for optimizing a design/part and make it more efficient in every aspect. The technology was not used before as the result output for most of the time s was not manufacturable due to the manufacturing constraints but due to additive manufacturing technology or popularly known name as 3d printing has now made it is possible to manufacture all critical parts/components by removing all the barriers of manufacturing constraints.</br></br>


           </div>
      </div>
	  <!-- Footer -->



    <!-- End page content -->
        <div class="container-fluid">
            <div class="row">
                <?php include'../footer.php';?>
            </div>
        </div>

<!-- Newsletter Modal -->

        <script>
            $(document).ready(function(){
                $("#menu_flip").click(function(){
                    $("#menu_panel").slideToggle("slow");
                });

            });
        </script>

</body>
</html>

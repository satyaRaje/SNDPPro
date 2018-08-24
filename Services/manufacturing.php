<!DOCTYPE html>
<html>
<title>IPRO3D_SmallBatchProduction</title>
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
<body style="background-color: whitesmoke;color: darkslategrey;padding: 20px;">
<?php include '../header.php';?>
<br><br><br>
<div id="menu_flip" >
    <button class="btn btn-primary">More Menu</button>
</div>
<div id="menu_panel">
    <?php include 'services_link.php';?>
</div>

    <!-- Top header -->
    <div class="container" style="color: darkslategrey;">
        <div class="row" style="background-color: whitesmoke;padding: 20px;text-align: justify;">
            <h2 style="text-align:center"><b>Manufacturing</b></h2>

            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
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

      
	  
      <div class="container" style="padding:20px;font-weight: bold;">
           <div class="row">
           <p>Small batch production can be done using 3d printing technology for directly producing end use parts. </br>SLS (Selective laser sintering), DMLS (Direct Metal Laser Sintering), SLA (Stereolithography), etc. machines are ideally suited to producing low volume plastic and metal parts, from one to as many as thousands.</br>3D printing produces parts in engineering grade and biocompatible materials which provides both strong and accurate parts as well as affordable which makes it a perfect application for your batch production needs.

</br></br>
           </div>
      </div>
	  <!-- Footer -->
    <div class="container-fluid">
     <div class="row">
         <?php include '../footer.php';?>
     </div>
 </div>



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

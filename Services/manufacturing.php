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


<body style="background-image:url('../temp-img/b1.png');">
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
        <div class="row">
            <h2 style="text-align:center"><b>Small Batch Production</b></h2>

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

      
	  
      <div class="container" style="padding:20px;">
           <div class="row">
		   </br>
		   </br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Small batch production can be done using 3d printing technology for directly producing end use parts.SLS (Selective laser sintering), DMLS (Direct Metal Laser Sintering), SLA (Stereolithography), etc. machines are ideally suited to producing low volume plastic and metal parts, from one to as many as thousands.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3D printing produces parts in engineering grade and biocompatible materials which provides both strong and accurate parts as well as affordable which makes it a perfect application for your batch production needs.

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
    $(document).ready(function(){
        $("#menu_flip").click(function(){
            $("#menu_panel").slideToggle("slow");
        });

    });
</script>

</body>
</html>

<!DOCTYPE html>
<html>
<title>IPRO3D-IdeaAndSolution</title>
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

<br><br>
    <!-- Top header -->
    <div class="container">
        <div class="row">
            <h2 style="text-align: center;"><b>Idea & Solution</b></h2>
            <br>

            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../temp-img/img3.jpg" alt="Image" style="height: 373px ;width: 1024px">
                        <div class="carousel-caption">
                            </div>
                    </div>

                    <div class="item">
                        <img src="../temp-img/banner2.jpg" alt="Image" style="height: 373px ;width: 1024px">
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




    <div class="container" style="padding:20px;">
        <div class="row">
		</br></br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 	If you're not that much of a designer, we offer design service and technical support so you can design your own products, with the precision of a professional designer.
Our team helps you make your product form idea stage to finished product/Solution. Our team guides you in achieving your goals. We at IPRO3D are a very passionate team of engineers and doctor.
			   </br></br>
        </div>
    </div>













    <!-- Footer -->

 <div class="container-fluid">
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

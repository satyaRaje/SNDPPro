<!DOCTYPE html>
<html>
<title>Ipro3d Mutation</title>
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

<body>
<?php include '../header.php';?>
<br><br><br>
<div id="menu_flip" >
    <button class="btn btn-primary">More Menu</button>
</div>
<div id="menu_panel">
    <?php include 'aboutus_link.php';?>
</div>


<br><br><br>
<div class="container">
    <div class="row">
        <h2 style="text-align: center;"><b>Mutation</b></h2>
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

<div class="container" style="padding: 20px;">
    <div class="row" style="font-weight: bolder;">


<p>IPRO3D mutation program is for students to develop their creative ideas/products and prototype them using the hi-tech 3d printing technology. The mutation program helps students to fabricate their ideas to product and get expert help if needed by the students. Students can also discuss their problems with the 3d printing community forums and get help from people working in 3d printing, 3d designing, etc.</p>
<p>Prototyping the innovative ideas and testing them in the real word are the basic need to the time. Being a student, it is not possible for them to get access individually to these hi-tech technologies to make a presentable prototype of their ideas but don’t you worry the mutation program helps students to get access to these hi-tech technologies and use it for prototyping their innovative and creative ideas.</p>
<p>Students just have to do a free registration in mutation program and access to hi-tech 3d printing latest technology.</p>
<p>Students registered in mutation program get special privileges of educational pricing and student discounts.</p>

		</div>
	
    <!-- End page content -->
</div>

<!-- Newsletter Modal -->

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

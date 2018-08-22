<!DOCTYPE html>
<html>
<title>IPRO3D-Authentic</title>
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

<link href="vGraphic.css" rel="stylesheet" type="text/css">
<link href="whatsApp.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<body class="w3-content" style="max-width:1200px">
<?php include '../header.php';?>
<!-- Sidebar/menu -->
<br><br><br>
<div id="menu_flip" >
    <button class="btn btn-primary">More Menu</button>
</div>
<div id="menu_panel">
    <?php include 'aboutus_link.php';?>
</div>

<!-- Top menu on small screens -->

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->

    <!-- Push down content on small screens -->


    <!-- Top header -->
      <div class="container">
           <div class="row">
           <h1 style="...">Authentic</h1>
           Technology has made everything simple and easy to understand. Explore the new standerds in 3d printing industry. If you want to make an actual prototype (3d physical object/part) of your 3d CAD model file, IPRO3D is the right place which offers authentic materials and processes for 3d printing models/designs. We make sure that everything you get is of excellent quality

	       <h4>Material Used</h4>
           IPRO3d offers a wide variety of high quality 3d Printing materials. Making your ideas become real 3d physical object/part in different materials like photopolymer resins, plastics and polymers, metals, alloys, high temperature resistant materials, tough materials, castable materials, etc. Our material have the highest level of dimensional accuracy and material properties. Whether you want to develop unique jewelry designs, scale models for architecture projects or landscapes, prototypes of toys, industrial parts, end use parts or medical devices, IPRO3D assures the premium quality materials for all prototypes according to product requirements. We offer different alternatives of materials like detailed, durable and multicolor also. You can choose the perfect materials alternative for your products.
             If you are not very good technically in choosing materials we are always there and can also help you choose it.

           </div>
      </div>
    <!-- Footer -->

    <!-- End page content -->

<!-- Newsletter Modal -->
<br><br>
<?php include '../footer.php';?>
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
<script>
    $(document).ready(function(){
        $("#menu_flip").click(function(){
            $("#menu_panel").slideToggle("slow");
        });

    });
</script>


</body>
</html>

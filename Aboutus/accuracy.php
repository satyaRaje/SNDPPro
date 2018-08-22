<!DOCTYPE html>
<html>
<title>IPRO3D Accuracy</title>
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
      <div class="container" >
           <div class="row">
           <h1 style="...">Accuracy</h1>
           <p>You are in the era of technology which has changed the world in an innovative way. Now, it is possible to change the 2D designs into a 3d physical object/part with advanced technological equipment and software solutions. Accuracy, quality and lead time are the key points in 3d printing processes. We at IPRO3D use high end software solutions and equipment which assure greater accuracy and fine quality in the final 3d printed product.</p>

	       <h4><b>Engineering Specifications</b></h4>
            It is essential to study the engineering specifications of the part before the 3D printing process starts. IPRO3D follows simple steps to achieve perfection in 3d printing process.
           </br>Basic steps we follow before we 3d print any part/design/idea.
           <ul>
           <li>Analysis and detail study of the part for 3d printing.</li>
           <li>Study of Prelimanary requirements and developments.</li>
           <li>Evaluation and prototyping</li>
           </ul>
            The accuracy of the 3d printed part is reflected from its 3D design/model.
           <h4><b>Authentic Appearance</b></h4>
           The appearance and scale of object are important in 3d printing industry. The carefull analysis, design and rendering of the CAD file with 3D software and tools ensure the authentic appearance of objects. Selection of 3d printing materials also contributes to the appearance and mechanical properties of the part/model/object.
<br><br>Design experts at IPRO3D identify and ensure the printability of the STL file of 3d CAD model to assure the authentic appearance of the models.
<br><br>The process of mapping of drawing form 3d CAD model file to actual 3d printing process is totally taken care by machine and its software’s.
<br><br>The process of mapping the drawing to model is the actual 3d printing process which is totally handeled by the machine. There are several processes associated with 3d printing. However, the basic principle of 3d printing layer by layer remains the same.</p>
           </div>
      </div>
	  
    <!-- Footer -->


    <!-- End page content -->


<!-- Newsletter Modal -->
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

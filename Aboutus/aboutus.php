<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
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

<body class="w3-content" style="max-width:1500px">
<?php include '../header.php';?>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="width:250px;height:200px;" id="mySidebar">
    <div class="w3-padding-64 w3-large w3-text-grey">
       <?php include 'aboutus_link.php';?>
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
	
	<div class="container">
           <div class="row">
	         
		   </div>
	</div>
	<!-- Footer -->
    
<div style="margin-top:100px">
	
    <h1>About Us</h1>
		 
		   <p><img src="img/Aboutus/1.png"></img>
&nbsp;&nbsp;We IPRO3D Technologies LLP is a 3D printing start-up located at Aurangabad, Maharashtra, India which is almost in the center of India geographically.We have a very good and passionate team of Engineers working towards the same goal.We provide professional Services online
<br> and offline for on demand production of prototypes,end use products,as well as batch production for products, etc using additive manufacturing technology also popularly known as 3D printing.<br>

   &nbsp;&nbsp;&nbsp;IPRO3D provides access to wide range of materials, finishes, techniques and manufacturing processes as well as superior optimization tools for file repair and analysis. We provide delivery of our 3d printed and traditionally manufactured products PAN India. We <br>
   
  also process worldwide delivery according to the order quantity.<br>
<li>IPRO3D a socially responsible business:<br>
 1)The company runs with a strong focus on Corporate Social Responsibility.<br>
 2)The founders have entrenched their commitment to social issues in the company’s character. <br>
 The style of management strives to achieve success on a daily basis, but also in long term.<br>
 <br>


<li>Report abusive content:<br> 
	If you think that this website presents abusive content, you may inform us at report@ipro3d.io

       </p>    
	 
</div>
    
</div>
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
</body>
</html>

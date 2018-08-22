<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="w3-content" style="max-width:1200px">
<?php include '../header.php';?>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold;margin-top:60px">
       <?php include 'services_link.php';?>
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

      </div
	  

    <!-- Footer -->
	            <h3 class = "zo-grid-title">3D Printing</a>
                    </h3>                <div class="zo-grid-content">
                    What is 3D printing? Glad you asked. Additive manufacturing process is popularly known as 3D printing. Additive manufacturing is a method of manufacturing physical parts in a successive addition process of...                </div>
                <div class="zo-grid-readmore">
                    <a href=# class="btn-link">[Read more]</a>
                </div>
                <h3 class = "zo-grid-title"><a href=# title="3D SCANNING">3D SCANNING</a>
                    </h3>                <div class="zo-grid-content">
                    It is a contactless, non-destructive technology that helps digitally captures the surface shape of a physical object by using a line of laser light or by superimposing several images files in...                </div>
                
                    <a href=# class="btn-link">[Read more]</a>
               
                <h3 class = "zo-grid-title"><a href=# title="3D DESIGN">3D DESIGN</a>
                    </h3>           <div class="zo-grid-content">     
                    3D and 2D Computer Aided Designing is a technology for designing and technical documentation for parts/models, which replaces manual drafting process. It is widely used by architects, engineers, and other professionals....                </div>
                <div class="zo-grid-readmore">
                    <a href=# class="btn-link">[Read more]</a>
                </div>
                <h3 class = "zo-grid-title"><a href=# title="EDUCATION">EDUCATION</a>
                    </h3> <div class="zo-grid-content">
                    Using a unique apprenticeship program to help train underserved communities learn advanced manufacturing skills such as 3D printing, we have just been given the opportunity to expand their approach even further. We...                </div>
                <div class="zo-grid-readmore">
                    <a href=# class="btn-link">[Read more]</a>
                </div>
                
				<h3 class = "zo-grid-title"><a href=# title="IDEA &#038; SOLUTION">IDEA &#038; SOLUTION</a>
                    </h3>    <div class="zo-grid-content">   
                    lf you're not that much of a designer, we offer design service and technical support so you can design your own products, with the precision of a professional designer. Our team...                </div>
                <div class="zo-grid-readmore">
                    <a href=# class="btn-link">[Read more]</a>
                </div>
            
                <h3 class = "zo-grid-title"><a href=# title="CUSTOMIZATION">CUSTOMIZATION</a>
                    </h3>      <div class="zo-grid-content">         
                    If you have a good idea and you want to see your idea being turned into a functional prototype, we can help you print a wide variety of products. This process supplies...                </div>
                <div class="zo-grid-readmore">
                    <a href=# class="btn-link">[Read more]</a>
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

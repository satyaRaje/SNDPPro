<!DOCTYPE html>
<html>
<title>IPRO3D Services</title>
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


<body style="background-image:url('../temp-img/b1.png');">
<?php include '../header.php';?>

<!-- Sidebar/menu -->
<br><br><br>
<div id="menu_flip" >
    <button class="btn btn-primary">More Menu</button>
</div>
<div id="menu_panel">
       <?php include 'services_link.php';?>
    </div>


<!-- Top menu on small screens -->
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->


    <!-- Push down content on small screens -->

    <!-- Top header -->
      <div class="container">
           <div class="row">
		   </br></br>
               <h3><b>3D Printing</b></h3>
                   What is 3D printing? Glad you asked. Additive manufacturing process is popularly known as 3D printing. Additive manufacturing is a method of manufacturing physical parts in a successive addition process of...
                   <a href=3dprinting.php class="btn-link">[Read more]</a>

               <h3><b>3D SCANNING</b></h3>
                   It is a contactless, non-destructive technology that helps digitally captures the surface shape of a physical object by using a line of laser light or by superimposing several images files in...
               <a href=3dscanning.php class="btn-link">[Read more]</a>

               <h3><b>3D DESIGN</b></h3>
                   3D and 2D Computer Aided Designing is a technology for designing and technical documentation for parts/models, which replaces manual drafting process. It is widely used by architects, engineers, and other professionals....
               <a href=design.php class="btn-link">[Read more]</a>

               <h3><b>EDUCATION</b></h3>
                   Using a unique apprenticeship program to help train underserved communities learn advanced manufacturing skills such as 3D printing, we have just been given the opportunity to expand their approach even further. We...
                   <a href=functional.php class="btn-link">[Read more]</a>

               <h3><b>IDEA & SOLUTION</b></h3>
                   lf you're not that much of a designer, we offer design service and technical support so you can design your own products, with the precision of a professional designer. Our team...
                   <a href=idea.php class="btn-link">[Read more]</a>

               <h3><b>CUSTOMIZATION</b></h3>
                   If you have a good idea and you want to see your idea being turned into a functional prototype, we can help you print a wide variety of products. This process supplies...
                   <a href="customization.php" class="btn-link">[Read more]</a>

</br>
</br>
</br>
</br>
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

<!DOCTYPE html>
<html>
<title>IPRO3D </title>
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

<!-- Top menu on small screens -->

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->


    <!-- Push down content on small screens -->


    <!-- Top header -->
      <div class="container">
           <div class="row">
           <h3>CAREERS</h3>

			<p><b>Job openings</b></p>
			<p>If you are passionate about 3d printing and want to work with a technology driven startup IPRO3D is the perfect place for you.</p>
			<p>Currently we do not have no Job openings but who knows where you could fit in so don’t miss on this opportunity and upload your resume here.</p>
			<div class="quoteblock-01">
                <img src="img/team/mem1.jpg" style="...">
            <h4>Yogesh Pawar</h4>
			<p><b>Managing Director</b></p></tr></td>
			<p>IPRO3D is a 3D printing additive manufacturing startup. We provide Idea to product design and prototyping service in various 3D printing additive manufacturing technologies. IPRO3D is a recognized startup by DIPP (Department of Industrial Policy and Promotion), Ministry of Commerce and Industries, Government of India.</p>
			<h4><b>Internship</b></h4></p>
			<p>Currently we don’t have any openings For internship but if you don’t want to miss any future opportunity working with us as an intern upload your resume here.</p>
            <h4 >3D PRINTING BASIC</h4>
    		<p>3D printing is a prototyping process whereby an real object is created from a 3D design. The digital 3D-model is saved in STL format and then sent to a 3D printer.</p>



    <!-- End page content -->
           </div>
      </div
    <!-- Footer -->
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

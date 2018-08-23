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

<body style="color: darkslategrey;background-color: whitesmoke;">
<?php include '../header.php';?>
<br><br><br>
<div id="menu_flip" >
    <button class="btn btn-primary">More Menu</button>
</div>
<div id="menu_panel">
    <?php include 'aboutus_link.php';?>
</div>

      <div class="container">
           <div class="row">
           <h3 style="text-align: center;font-weight: bold;">CAREERS</h3>
               <h3>Job openings</h3>
            <i style="font-weight: bolder;">" If you are passionate about 3d printing and want to work with a technology driven startup IPRO3D is the perfect place for you.
			Currently we do not have no Job openings but who knows where you could fit in so don’t miss on this opportunity and upload your resume here."</i>

             <div style="text-align: right;">
                 <b>Yogesh Pawar</b>
                 <br>
                 <b style="color: #999999;">Managing Director</b>
            </div>
<br>
			<p style="font-weight: bold;">IPRO3D is a 3D printing additive manufacturing startup. We provide Idea to product design and prototyping service in various 3D printing additive manufacturing technologies. IPRO3D is a recognized startup by DIPP (Department of Industrial Policy and Promotion), Ministry of Commerce and Industries, Government of India.</p>
			<h3><b>Internship</b></h3></p>
			<p style="font-weight: bold;">Currently we don’t have any openings For internship but if you don’t want to miss any future opportunity working with us as an intern upload your resume here.</p>
            <h4 >3D PRINTING BASIC</h4>
    		<p style="font-weight: bold;">3D printing is a prototyping process whereby an real object is created from a 3D design. The digital 3D-model is saved in STL format and then sent to a 3D printer.</p>
            </table>
<br>

    <!-- End page content -->
           </div>
      </div
    <!-- Footer -->
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

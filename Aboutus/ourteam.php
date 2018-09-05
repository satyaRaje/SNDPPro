<!DOCTYPE html>
<html>
<title>IPRO3D-OurTeam</title>
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

    <?php include 'aboutus_link.php';?>

    <!-- Top header -->
      <div class="container">
           <div class="row">
		   <h1 style="text-align: center;"><b>Our Team</b></h1>
	  		</div>
	  </div>
    <!--  Our Team -->
	  
	<div class="container">

        
       <p class="w3-center w3-large">The ones who runs this company...</br>IPRO3D Technologies LLP was founded on 14th October 2017 By Er. Yogesh Chandrakant Pawar and Dr. Chandrakant T Pawar.</p>
        <br><br>
      <div class="row">
           <div class="col-sm-3 card" style="background-color:#DCDCDC;padding-left:40px">
                <center><img src="../img/team/t1.jpg" alt="Dan" class="card-img-top img-circle" height="150px"></center>
                    <h5 class="card-title" style="font-weight: bold;padding-left:55px">Er. Yogesh C. Pawar </h5>
               <p><b style="color: #696969;padding-left:0px">Founder and Director Department</b></p>
			   <p style="padding-left:0px">Business Operations and Business Development Passionate Mechanical Engineer and Entrepreneur.</p><br><br>
               </div>
          <div class="col-sm-3 card" style="background-color:#DCDCDC;padding-left:40px" >
                <center><img src="../img/team/t2.png" class="card-img-top img-circle" height="150px" ></center>
                    <h5 class="card-title" style="font-weight: bold;padding-left:35px">Dr.Chandrakant T Pawar</h5>
              <p><b style="color:#696969 ;font-weight: bold;padding-left:33px">Co-Founder and Director</b><br>
                        <p style="padding-left:33px">Department- Finance</br>Doctor by profession.</br></br></p><br><br>
          </div>

          <div class="col-sm-3 card" style="background-color:#DCDCDC;padding-left:40px">
                <center><img src="../img/team/t3.jpg" class="card-img-top img-circle" height="150px"></center>
                    <h5 class="card-title" style="font-weight: bold;padding-left:50px">Er. Vivek R Mugdal</h5>
                    <p style="color: #696969;font-weight: bold;padding-left:50px">Trainee Engineer</p>
                    <p style="padding-left:50px">Department–Business Operations Passionate Electrical and Electronics Engineer. </p><br>
          </div>

           <div class="col-sm-3" style="background-color:#DCDCDC;padding-left:40px">
                <center><img src="../img/team/t4.jpg" class="card-img-top img-circle" height="150px"></center>
                    <h5 style="font-weight: bold;padding-left:53px">Mr. Yash C. Pawar</h5>
                    <p style="color: #696969;padding-left:40px"> Intern (Graphic design, Arts and animated modeling)</p>
                    <p style="padding-left:40px">Department-Business Development</br>Passionate artist  and graphic designer.</p>
           </div>
      </div>
    </div>


<div class="container" style="text-align:justify;padding:20px;">
  <div class="row">
    <h3 style="font-weight: bold;">We have two teams working towards same goal</h3>
  </div>
</div>
<div class="container" style="text-align:justify;padding:20px;">
  <div class="row">
      <ol>
          <b><li> Web development and business development Team.</li></b>
       <ul type="none">
           <li>This team designs and operates online and offline portal services.It is also responsible for promoting of IPRO3D and build a strong customer relationship by enhancing the user experience and acquire new customers. This team specifically works towards improvement of web portal and web services related issues by removing the flaws in the existing system.</li>
       </ul>
          <b><li>Business operations Team</li></b>
          <ul type="none">
              <li>
              The operations team performs the actual additive manufacturing or 3D printing of the 3D CAD designs and 3D scans by using various techniques of additive manufacturing or 3d printing as the principle remains the same even if the method of manufacturing is changed. This team looks after rigorous quality testing of the 3d printed product/part/object. The operations team is also responsible for the procurement of raw material, rigorous quality testing and control, reducing the Leadtime, designing, packaging, accounts and finance, etc.
              </li>
          </ul>
      </ol>
  </div>
</div>
    <!-- End page content -->
</div>
</div>
<br>
<div class="container-fluid">
   <div class="row">
         <?php include'../footer.php';?>
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

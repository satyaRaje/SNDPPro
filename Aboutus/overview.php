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

<body>
<?php include '../header.php';?>
<br><br><br>

<div id="menu_flip" >
    <button class="btn btn-primary">More Menu</button>
</div>
<div id="menu_panel">
    <?php include 'aboutus_link.php';?>
</div>
<div class="container" >
<div class="row" style="background-color: whitesmoke;color: darkslategrey;padding: 20px;text-align: justify;">
<h2 style="text-align: center;font-weight: bold;">Overview</h2>

<p style="text-align:justify;padding:20px;">

&nbsp;&nbsp;We IPRO3D Technologies LLP is a 3D printing start-up located at Aurangabad, Maharashtra, India which is almost in the center of India geographically.We have a very good and passionate team of Engineers working towards the same goal.We provide professional Services online<br>
 and offline for on demand production of prototypes,end use products,as well as batch production for products, etc using additive manufacturing technology also popularly known as 3D printing.<br>
<br>
   &nbsp;&nbsp;&nbsp;IPRO3D provides access to wide range of materials, finishes, techniques and manufacturing processes as well as superior optimization tools for file repair and analysis. We provide delivery of our 3d printed and traditionally manufactured products PAN India. We
     also process worldwide delivery according to the order quantity.<br>
        <b>IPRO3D a socially responsible business:</b>
        <ol>
            <li>The company runs with a strong focus on Corporate Social Responsibility.</li>
            <li>The founders have entrenched their commitment to social issues in the company’s character.</li>
            <li>The style of management strives to achieve success on a daily basis, but also in long term.</li>
        </ol>


<i><p style="color: gray;font-weight: bold">Report abusive content:<br>
    If you think that this website presents abusive content, you may inform us at report@ipro3d.io</p></i>
        <br>    <br>
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

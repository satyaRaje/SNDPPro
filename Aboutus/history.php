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

<div class="container">
    <div class="row" style="color: darkslategrey;background-color: whitesmoke;padding: 20px;">
        <h2 style="text-align: center;font-weight: bold;">Company History and Timeline</h1>
<p style="text-align:justify;padding:20px;">
 <li>Idea (June 2016) – Eureka, Idea of 3D printing business.</li>
<li>Market survey (August 2016)</li>
<li>Training at MCED (October 2016)</li>
<li>Planning and development (December 2016)</li>
<li>Company Incorporation as IPRO3D TECHNOLOGIES LLP (October 2017)</li>
<li>Plant set up in Aurangabad (October 2017)</li>
<li>Website launch and India 1st Additive Manufacturing 3D Printing Online Marketplace (March 2018)</li>
<li>Incubated at MAGIC (Marathwada Accelerator for Growth and Incubation Council) Incubation Center by CMIA (Chamber of Marathwada Industries and Agriculture) (May 18)</li>
<li>Recognized as a Startup by DIPP (Department of Industrial Policy and Promotion) under Ministry of Commerce and Industries, Government of India. (May 18)</li>
<li>Solidworks partners as CAD partner with IPRO3D TECHNOLOGIES LLP (July 18)</li>
</p>
        <br><br>
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

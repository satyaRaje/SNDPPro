<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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


<style>
#myDIV {
     background: #DCDCDCDC	;
    -webkit-animation: mymove 5s infinite; /* Safari 4.0 - 8.0 */
    animation: mymove 5s infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    50% {background-color: #D3D3D3;}
}

@keyframes mymove {
    50% {background-color: #D3D3D3;}
}

#rcorners1 {
    border-radius: 25px;
    background: #2ACFEE;
    padding: 20px; 
    width: 200px;
    height: 150px;    
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 90%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}

</style>


<body style="background-color:#F0F0F0">

<div class="container-fluid">
<?php include '../header.php';?>

<div class="container-fluid">
    <div class="row">
	</br>
<?php
    $query = "select * from admin_product_table";

    $conn = mysqli_connect("localhost","root", "","add_product_db");
	if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
	
    $check = mysqli_query($conn,$query);
    
    echo '<div class="row" >
	  <div class="col-sm-9" style="background-color:#F0F0F0;margin-top:-20px">
	  </br>
	  <h2 align="center" style="font-family:Arial, Helvetica, sans-serif;"> Marketplace</h2></br>
      <h3 align="center" style="color:grey;font-family:Arial, Helvetica, sans-serif;">Except The Unexpected...</h3>
       </br></br></br>
	   <button id="rcorners1" style="margin-left:5%;font-family:Arial, Helvetica, sans-serif;font-size:18px;">Upload Product !</button> 	   
	   <button id="rcorners1" style="margin-left:5%;font-family:Arial, Helvetica, sans-serif;font-size:18px;">Sale Your Idea !</button>
	   <button id="rcorners1" style="margin-left:5%;font-family:Arial, Helvetica, sans-serif;font-size:18px;">Hier a Designer !</button>
	   <button id="rcorners1" style="margin-left:5%;font-family:Arial, Helvetica, sans-serif;font-size:18px;">Rounded corners!</button></br></br></br>
	      
<div class="container-fluid">
    <div class="row" > 
	<h3 style="color:grey;font-family:Arial, Helvetica, sans-serif;"align="center">Bring ART to the CART...</h3></br></br></br>';
    if($check){
     while($value = mysqli_fetch_assoc($check)){ ?>
           
           
      
	  <div class="col-sm-3">
		   <div class="card">
             <center><button class="btn btn-primary" style="background-color:#F0F0F0;border-color:#F0F0F0;margin-top:20px;"><img src='<?php echo "proImage/".$value['Product_Name'].".jpg";?>'class="card-img-top img-circle"  height="160px" width="150px"></button></center>
             <div class="container" style="font-family:Arial, Helvetica, sans-serif;">
             <p style="padding-left:45px;"><?php echo $value['Product_Name'];?></p>
             <p style="padding-left:70px"><?php echo $value['Product_Price'];?></p>
			 <a href="#" style="color:blue;padding-left:50px"><u>View Details</u></a></br></br>
			 <button style="background-color:white-smoke;width:190px;"><b>Buy Now</b></button>
			 <h4 style="color:#F0F0F0">ipro3d</h4>
            
             </div>
           </div>
		</div>

	    <?php }?>
   
    
<?php
   echo"</div>";
 }
 
?>
</div>
</div>
<div class="container-fluid" style="margin-right:0%;">
       <div class="col-sm-3 sidenav" style="background-color:#F5F5F5;height:900px;width:372px;margin-top:-20px;margin-right:-20px"	>
			<br><h3 align="center" style="font-family:Arial, Helvetica, sans-serif;">User Profile</h3><br>
                <img src="../img/team/t4.jpg"  style="height:160px ;width:150px;margin-left:100px;margin-top:10px;"></img>
				<br>
				<br>
				<br>
                <h4 style="text-align:center" >Name : abc</h4>
                <h4 style="text-align:center" >City: Aurangabad</h4>
                <h4 style="text-align:center" >Email : abc@gmail.com</h4>
               

                            </div>

    </div>
  </div>
</div>

</body>
</html>


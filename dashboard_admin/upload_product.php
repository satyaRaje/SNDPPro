<?php
session_start();
    ?>

<head>

    <title>Home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }

        #enq_panel, #enq_flip {
            padding: 5px;
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*/
        }

        #enq_panel {
            padding: 50px;
            display: none;
        }


        #adm_panel, #adm_flip {
            padding: 5px;
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #adm_panel {
            padding: 50px;
            display: none;
        }

         img {
              border-radius: 50%;
             }        
        #rpt_panel, #rpt_flip {
            padding: 5px;
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*/
        }

        #rpt_panel {
            padding: 50px;
            display: none;
        }

        #admin_panel, #admin_flip {
            padding: 5px;
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*/
        }

        #admin_panel {
            padding: 50px;
            display: none;
			
        }
		



        #std_panel, #std_flip {
            padding: 5px;
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*/
        }

        #std_panel {
            padding: 50px;
            display: none;
        }




        #myac_panel, #myac_flip {
            padding: 5px;
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*/
        }

        #myac_panel {
            padding: 50px;
            display: none;
        }


        #admission_panel, #admission_flip {
            padding: 5px;
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*/
        }

        #admission_panel {
            padding: 50px;
            display: none;
        }
		



    </style>

	
	
	</head>
<body>
<?php include 'header_dashboard.php' ?>
<br>
<br>

    <div class="container-fluid text-center" style="margin-top:20px;">
		<div class="row content">
            <div class="col-sm-3 sidenav" style="background-color:#87CEEB;margin-top:-10px;height:950px;"	>
			<br>
			<div class="row content">
                <img src="img/logo/3dadative.png"  style="height:100px ;width:100px;"  ></img>
				<br>
				<br>
				<br>
                <h4>Name : Swaranjali</h4>
                <h4>Mobile : 1234567890</h4>
                <h4>Email : @gmail.com</h4>
                <h4>Center Id : 1001</h4>

                <br>
                <br>
                </br>
				<button>Logout</button>
				</br>
				</br>
				<a href="changepassword.php" style="font-size:20px;color:black">Change Password</a>
				
				<br>
            </div>
			</div>

<h1 style="text-align:center;">Upload Product</h1>
<br>
            <div class="col-sm-6 text-left">
			<form method="post" action="">
    <section id="contact" class="content-section ">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
					       
						    <div class="form-group">
                                <label for="exampleInputEmail2">Admin ID</label>
                                <input type="text" class="form-control" name="aid" placeholder="">
                            </div>
							
							<div class="form-group">
                                <label for="exampleInputEmail2">Admin Name</label>
                                <input type="text" class="form-control" name="aname" placeholder="">
                            </div>
							
                            <div class="form-group">
                                <label for="exampleInputName2">Product Name</label>
                                <input type="text" class="form-control" name="pname" placeholder="Enter product name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail2">Product Price</label>
                                <input type="text" class="form-control" name="pprice" placeholder="Enter product price">
                            </div>
							
                            <div class="form-group">
							        <form action="" method="POST" enctype="multipart/form-data">
                                      <label>Select Image</label>   <input type="file" name="image" > </form>
		                   </div>
							
							<div class="form-group">
                                <label for="exampleInputEmail2">Product Height</label>
                                <input type="text" class="form-control" name="pheight" placeholder="">
                            </div>
							
							<div class="form-group">
                                <label for="exampleInputEmail2">Product Width</label>
                                <input type="text" class="form-control" name="pwidth" placeholder="">
                            </div>
							
							<div class="form-group">
                                <label for="exampleInputEmail2">Product Volume</label>
                                <input type="text" class="form-control" name="pvolume" placeholder="">
                            </div>

                            <div class="form-group ">
                                <label for="exampleInputText">Description of Product</label>
                                <textarea  class="form-control" name="pdesc" placeholder="Description"></textarea>
                            </div>
							<div class="form-group" align="center">
                                        <input type="submit" class="btnRegister" name="b_upload" style="width:50%" value="Upload Product"/>
                                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



			
           </div>
		</div>
    </div>
</form>


<div>
<footer class="container-fluid text-center">
        <?php include 'footer_dashboard.php';?>
    </footer>
</div>



    
   
<?php
if(isset($_POST['b_upload'])){


	

    @$pname=$_POST['pname'];
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"proImage/".$pname.".jpg");
         echo "Success";
      }else{
         print_r($errors);
      }
   }

	
	
	
	
	$query= "INSERT INTO `admin_product_table`(`Admin_Name`, `Product_Name`, `Product_Price`, `Product_Height`, `Product_Width`, `Product_Volume`, `Product_Description`, `Product_Image`, `Admin_id`) VALUES ('".$_POST['aname']."','".$_POST['pname']."','".$_POST['pprice']."','".$_POST['pheight']."','".$_POST['pheight']."','".$_POST['pvolume']."','".$_POST['pdesc']."','".$_POST['image']."','".$_POST['aid']."')";
    $conn = mysqli_connect("localhost","root", "","add_product_db");
	if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
	
    $check = mysqli_query($conn,$query);
	
    if ($check) {
      echo "New record created successfully";
	echo '<meta http-equiv="refresh" content="0">';
	  
    } 

    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
		
    mysqli_close($conn);

}
?>
</body>
   
   
z
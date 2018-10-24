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
            <div class="col-sm-3 sidenav" style="background-color:#87CEEB;margin-top:-10px;height:558px;"	>
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

<h1 style="text-align:center;">Remove Product</h1>
<br>
            <div class="col-sm-6 text-left">
			<form method="post" action="">
    <section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="exampleInputName2">Product ID</label>

                               

                                <input type="text" class="form-control" name="fname" placeholder="Enter product ID">

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail2">Product Name</label>
                                <input type="text" class="form-control" name="mobileno" maxlength="10" placeholder="Enter product name">
                            </div>
                            
                            <button type="submit" class="btn btn-default" name="enquire">Remove Product</button>
							
							 
							 </br></br>
							 <button class="btn btn-default" src="dashboard.php" name="enquire">Go back to Home</button>


                        <hr>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

</form>

			
           </div>
		</div>
    </div>


</body>
<div>
<footer class="container-fluid text-center">
        <?php include 'footer_dashboard.php';?>
    </footer>
</div>
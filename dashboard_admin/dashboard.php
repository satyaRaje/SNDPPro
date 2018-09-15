<?php
session_start();
if($_SESSION['log']=='1'){

    ?>

<head>

    <title>Home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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

    <script>
        $(document).ready(function(){

            $("#enq_flip").click(function(){
                $("#enq_panel").slideToggle("slow");
            });
            $("#adm_flip").click(function(){
                $("#adm_panel").slideToggle("slow");
            });

            $("#admin_flip").click(function(){
                $("#admin_panel").slideToggle("slow");
            });

            $("#rpt_flip").click(function(){
                $("#rpt_panel").slideToggle("slow");
            });

            $("#std_flip").click(function(){
                $("#std_panel").slideToggle("slow");
            });


            $("#myac_flip").click(function(){
                $("#myac_panel").slideToggle("slow");
            });


            $("#admission_flip").click(function(){
                $("#admission_panel").slideToggle("slow");
            });
        });
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="col-sm-3 bg-primary">

    </div>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="dashboard.php"><img src="svg/home.svg" width="60px"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <!-- <li class="active"><a href="#">Home</a></li>
                     <li><a href="#">About</a></li>
                     <li><a href="#">Projects</a></li>
                     <li><a href="#">Contact</a></li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <form action="" method="post"> <button class="btn btn-link pull-right"  type="submit" name="logout"><img src="svg/lock.svg" width="60px"> Logout</button>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid text-center" >
        <div class="row content">
            <div class="col-sm-2 sidenav" style="background-color:orange;">
                <img src="a.jpg" height="100px" width="100px" class="img img-circle"/>
                <h6>Name : <?php echo $_SESSION['fullName'];?></h6>
                <h6>mobile : <?php echo $_SESSION['mobile'];?></h6>
                <h6>Email : <?php echo $_SESSION['email'];?></h6>
                <h6>Center Id : <?php echo $_SESSION['userId'];?></h6>

                <br>
                <br>
                <hr>
                <a href="changepassword.php"><h3>change Password</h3></a>
            </div>

            <div class="col-sm-8 text-left">
                <div class="container" style="color: white;font-weight: bolder;">
                    <div class="row text-center">
                        <div class="card col-sm-3" id="enq_flip" style="border-radius: 50%;background-color:transparent;border-style: none;">
                            <div class="card-body">
                                <div class="card-header">
                                    <h6><img src="svg/assistant.svg" height="100px" class="img img-circle"></h6>
                                    <label class="label label-primary" style="font-size: large;">Enquiry</label>
                                </div>
                                <div style="font-size: large;" id="enq_panel">
                                    <a href="enquiry.php"><button class="btn "> Take Enquiry</button></a>
                                    <br><br>
                                    <a href="#"><button class="btn "> Folloup</button></a>

                                </div>
                            </div>
                        </div>

                        <div class="card col-sm-3" id="admission_flip" style="border-radius: 50%;background-color:transparent;border-style: none;">
                            <div class="card-body">
                                <div class="card-header">
                                    <h6><img src="svg/reading.svg" height="100px" class="img img-circle"></h6>
                                    <label class="label label-primary" style="font-size: large;">Admission</label>
                                </div>
                                <div style="font-size: large;" id="admission_panel">
                                    <a href="spotAdmission.php"><button class="btn "> New Admission</button></a>
                                    <br><br>
                                    <a href="core/enquiryReport.php" > <button class="btn">From Enquiry</button></a>
                                </div>
                            </div>
                        </div>


                        <div class="card col-sm-3" style="border-radius: 50%;background-color:transparent;border-style: none;" id="adm_flip">
                            <div class="card-body">
                                <div class="card-header">
                                    <h6><img src="svg/sales_performance.svg" height="100px" class="img img-circle"></h6>
                                    <label class="label label-primary" style="font-size: large;">Pay Fees</label>
                                </div>
                                <div id="adm_panel">
                                    <a href="core/admissionReport.php"><button class="btn" >Pay Fees</button></a>
                                </div>
                            </div>
                        </div>


                    </div>

                    <br>
                    <div class="row text-center">


                        <div class="card col-sm-3" style="background-color:transparent;border-style: none;"  id="rpt_flip">
                            <div class="card-body">
                                <div class="card-header">
                                    <h6><img src="svg/document.svg" height="100px" class="img img-circle"></h6>
                                    <label class="label label-primary" style="font-size: large;">Report</label>
                                </div>
                                <div id="rpt_panel" >
                                    <a href="core/admissionReport.php"><button class="btn">Admission Report</button></a><br>
                                    <br>
                                    <a href="core/admissionReport.php"><button class="btn">Pending Fess Report</button></a>
                                    <br><br>
                                    <a href="collection.php"><button class="btn">Collection Report</button></a>
                                </div>
                            </div>
                        </div>


                        <div class="card col-sm-3 bg-info" style="border-radius: 50%;background-color:transparent;border-style: none;" id="std_flip">
                            <div class="card-body">
                                <div class="card-header">
                                    <h6><img src="svg/advertising.svg" height="100px" class="img img-circle"></h6>
                                    <label class="label label-primary" style="font-size: large ;">Marketing & Student Information</label>
                                </div>
                                <div style="font-size: large;" id="std_panel">
                                    <button class="btn "><a href="#">Upload File</a></button><br><br>
                                    <button class="btn " ><a href="#" >Upload Message</a></button>
                                    <br><br>
                                    <a href="#"> <button class="btn"> Upload PDF</button></a><br><br>
                                    <a href="#"><button class="btn"> Upload Questions</button></a>

                                </div>
                            </div>
                        </div>
                        <div class="card col-sm-3" style="border-radius: 50%;background-color:transparent;border-style: none;"   id="admin_flip">
                            <div class="card-body">
                                <div class="card-header">
                                    <h6><img src="svg/services.svg" height="100px" class="img img-circle"></h6>
                                    <label class="label label-primary" style="font-size: large;">Management</label>

                                </div>
                                <div  style="font-size: large;" id="admin_panel">
                                    <label class="label label-success">Course</label><br>
                                    <br>
                                    <a href="core/addcourse.php"> <button class="btn"> Add</button></a>
                                    <a href="core/courseview.php"><button class="btn"> View</button></a>

                                    <br><br>
                                    <label class="label label-primary">Batch</label>
                                    <br><br>
                                    <a href="core/addBatch.php"><button class="btn"> Add</button></a>
                                    <a href="core/viewbatch.php" >  <button class="btn">View</button></a>

                                    <br><br>
                                    <a href="addUser.php" class="btn btn-link">Add User</a>
                                </div>
                            </div>
                        </div>







                    </div>






                </div>

            </div>
            <div class="col-sm-2 sidenav" style="background-color:orange;">
                <div class="well">
                    <h3>Pending Collection</h3>
                </div>
                <div class="well">
                    <h3>Followup Calls</h3>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <?php include 'footer.php';?>
    </footer>

</div>
</body>

<?php
if(isset($_POST['logout'])){
    mysqli_close($conn);
    session_destroy();
    echo "<script> location.href='index.php' </script>";
}

?>


<?php }else{
      echo "fail";
   // echo "<script> location.href='index.php' </script>";
} ?>

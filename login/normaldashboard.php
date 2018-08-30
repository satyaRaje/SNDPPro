
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
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
        });
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include 'header.php';?>


    </div>
</div>
<div class="container" style="color: white;font-weight: bolder;">
    <div class="row text-center">
        <div class="card col-sm-4" id="enq_flip" style="border-radius: 50%;background-color:transparent;border-style: none;">
            <div class="card-body">
                <div class="card-header">
                    <h1 style="color: red;"><i class="glyphicon glyphicon-user color-primary"></i></h1>
                    <label class="label label-primary" style="font-size: large;">Enquiry </label>
                </div>
                <div style="font-size: large;" id="enq_panel">
                    <a href="enquiry.php"><button class="btn ">View</button></a>
                </div>
            </div>
        </div>




        <div class="card col-sm-4" style="border-radius: 50%;background-color:transparent;border-style: none;" id="adm_flip">
            <div class="card-body">
                <div class="card-header">
                    <h1 style="color: red;"><i class="fa fa-user-plus"></i></h1>
                    <label class="label label-primary" style="font-size: large;">Quotation</label>
                </div>
                <div id="adm_panel">
                    <a href="quote.php"><button class="btn" >View Qutation</button></a>
                </div>
            </div>
        </div>







        <div class="card col-sm-4" style="border-radius: 50%;background-color:transparent;border-style: none;"  id="myac_flip">
            <div class="card-body">
                <div class="card-header">
                    <h1 style="color: red;"><i class="glyphicon glyphicon-book"></i></h1>
                    <label class="label label-primary" style="font-size: large;">My Profile :
                        <?php echo $_SESSION['email'];?>
                    </label>
                </div>
                <div   id="myac_panel">
                    <h3 style="color: red;">Center Number : <?php echo $_SESSION['userId'];?></h3>
                    <h3 style="color: red;">Mobile No : <?php echo $_SESSION['mobile'];?></h3>
                </div>
            </div>
        </div>

    </div>

    <br>
    <hr>

</div>
<br>

<div class="container-fluid">
    <div class="row">
        <?php include 'footer.php'?>
    </div>
</div>
</body>

</html>

<?php
if($_SESSION['ENQ']=='1'){
    echo "<script>alert('Enquiry Added Successfully...');</script>";
    $_SESSION['ENQ']='2';
}else if($_SESSION['ENQ']=='0'){

    echo "<script>alert('Enquiry Unable to add try again...');</script>";
}
?>


<?php
if($_SESSION['Adm']=='1'){
    echo "<script>alert('Enquiry Added Successfully...');</script>";
    $_SESSION['Adm']='2';
}else if($_SESSION['Adm']=='0'){

    echo "<script>alert('Enquiry Unable to add try again...');</script>";
}
?>




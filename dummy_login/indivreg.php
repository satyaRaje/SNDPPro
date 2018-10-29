<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Register as Individual</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="IPRO3D Register As Individual Form">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

<body>
<?php include '../header.php'?>
<br>
<h1 class="title-agile text-center">Registration as Individual</h1>
<div class="content-w3ls">
    <div class="content-bottom">
        <!--<h1>Register as Individual</h1>-->
        <form action="" method="post">
            <div class="field-group">
                <span class="fa fa-user" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text"  name="sname"  placeholder="Student Name" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-envelope" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text"  name="email"  placeholder="Email Id" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-mobile-phone" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type=text"  name="mobileno"  placeholder="Mobile" required>
                </div>
            </div>


            <div class="field-group">
                <span class="fa fa-calendar" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="date"  name="dob"  min="2017-04-01" placeholder="Date Of Birth" equired>
                </div>
            </div>

            <span class="" aria-hidden="true"></span>
            <h2 class=""></h2>
            <input type="radio" name="gender" value="0"> <b style="color:white;">Male</b>
            <input type="radio" name="gender" value="1"><b style="color:white"> Female</b>
            <input type="radio" name="gender" value="2"><b style="color: white;"> Other</b><br><br>




            <div class="field-group">
                <span class="fa fa-home" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text"  name="address"  placeholder="Address" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-address-book" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text"  name="country"  placeholder="Country" required>
                </div>
            </div>



            <div class="field-group">
                <span class="fa fa-address-card" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text"  name="state"  placeholder="State" required>
                </div>
            </div>


            <div class="field-group">
                <span class="fa fa-user" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text"  name="city"  placeholder="City" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-map-pin" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text"  name="pincode"  placeholder="Pincode" required>
                </div>
            </div>

            <div class="wthree-field">
                <input id="saveForm" name="b_register" type="submit"/>
            </div>
        </form>
    </div>
</div>
</body>
<!-- //Body -->
</html>

<?php
if(isset($_POST['b_register'])){
  // session_start();
    include  "../dbClass.php";
    $db = new dbClass();

    //$_SESSION['OTP']=rand(1000,9000);
    $qry="INSERT INTO `tblindividual`(`fname`, `gender`, `email`, `mobile`, `pwd`, `dateOfBirth`,  `address`, `flag`,city,state,country) VALUES ('".$_POST['sname']."',1,'".$_POST['email']."','".$_POST['mobileno']."','".md5('12345')."','".$_POST['dob']."','".$_POST['address']."',1,'".$_POST['city']."','".$_POST['state']."','".$_POST['country']."')";
    if($db->iudCall($qry)==true){
        echo "<script>alert('Thanks For Registration');</script>";
    }else{
        echo "<script>alert('Please Try Again');</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Register as acompany</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="IPRO3D Company Registration Form">
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
    <link rel="stylesheet" href="css/style.css"  type="text/css" media="all">
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
<h1 class="title-agile text-center">Registration as Company</h1>
<div class="content-w3ls">
    <div class="content-bottom">
        <h2></h2>
        <form action="#" method="post">
            <div class="field-group">
                <span class="fa fa-laptop" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text"  name="cname"  placeholder="Company Name" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-user" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text"  name="cperson"  placeholder="Contact Person" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-user-circle" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text"  name="designation"  placeholder="Designation" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-phone-square" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text"  name="mobileno"  placeholder="Mobile Number" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-address-book-o" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input type="text" name="Location"  placeholder="Location" required>
                </div>
            </div>

            <div class="field-group">
                <span class="fa fa-pencil" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="text1"  type="compregi"  placeholder="Company Registration Number" required>
                </div>
            </div>


            <!-- script for show password -->
                <script>
                    function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
                <!-- //script for show password -->

            <div class="wthree-field">
                <input id="saveForm" name="saveForm" type="submit" value="Register" />
            </div>
        </form>

    </div>
</div>
</body>
<!-- //Body -->
</html>


<?php
if(isset($_POST['saveForm'])){
    // session_start();
    include  "../dbClass.php";
    $db = new dbClass();

    //$_SESSION['OTP']=rand(1000,9000);
    $qry="INSERT INTO `tblcompany`(`companyName`, `mobileNo`, `email`, `designation`, `location`, `flag`) VALUES ('".$_POST['cname']."','".$_POST['mobileno']."','".$_POST['email']."','".$_POST['designation']."','".$_POST['Location']."',0)";
    if($db->iudCall($qry)==true){
        echo "<script>alert('Thanks For Registration');</script>";
    }else{
        echo "<script>alert('Please Try Again');</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>login form</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="IPRO3D Company Login Form">
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
<?php include '../header.php';?>
    <h1 class="title-agile text-center">Login</h1>
    <div class="content-w3ls">
        <div class="content-bottom">
			<h2></h2>
            <form action="#" method="post">
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="text1" id="text1" type="text" value="" placeholder="Username" required>
                    </div>
                </div>



                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="password" id="myInput" type="Password" placeholder="Password">
                    </div>
                </div>
                <div class="field-group">
                    <div class="check">
                        <label class="checkbox w3l">
                            <input type="checkbox" onclick="myFunction()">
                            <i> </i>show password</label>
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
                </div>
                <div class="wthree-field">
                    <input id="saveForm" name="saveForm" type="submit" value="Log in" />
                </div>
                <ul class="list-login">
                    <li class="switch-agileits">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                            keep signed in
                        </label>
                    </li>
                    <li>
                        <a href="forgot.php" class="text-right">forgot password?</a>
                    </li>
               <!--     <div class="row">
                        <img src="../logo/facebook.svg">

                    </div>-->
                    <li class="clearfix"></li>
                </ul>
                <div class="check">
            <ul class="switch-agileits">
                <li>
                    <a href="indivreg.php"><label class="checkbox">Create an acoount</label></a>

                </li>
            </ul>
                </div>
            </form>
        </div>
    </div>
<?php include '../footer1.php';?>
    </body>
<!-- //Body -->
</html>



<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .login-block{
            background: #DE6262;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #DCDCDC, #DCDCDC);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            float:left;
            width:100%;
            padding : 50px 0;
        }
        .container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
        .carousel-inner{border-radius:0 10px 10px 0;}
        .carousel-caption{text-align:left; left:5%;}
        .login-sec{padding: 50px 30px; position:relative;}
        .login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
        .login-sec .copy-text i{color:#FEB58A;}
        .login-sec .copy-text a{color:#E36262;}
        .login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
        .login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
        .btn-login{background: #DE6262; color:#fff; font-weight:600;}
        .banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
        .banner-text h2{color:#fff; font-weight:600;}
        .banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
        .banner-text p{color:#fff;}
    </style>
</head>
<!------ Include the above in your HEAD tag ---------->
<body>
<!--
<section class="login-block">
    <div class="container">
        <div class="row" >
            <div class="col-sm-6 login-sec">
                <h2 class="text-center">Login</h2>
                <form class="login-form" method="post" action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase" >Username</label>
                        <input type="text" class="form-control"name="email" placeholder="">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase" >Password</label>
                        <input type="password" class="form-control"name="password" placeholder="">
                    </div>

                    <div class="col-sm-6 banner-sec pull-right">
                        <button type="submit" name="lo" class="btn btn-register float-left">Register as Industry</button>
                        <button type="submit" name="lo" class="btn btn-individual float-right">Register as Individual</button>

                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            <small>Remember Me</small>
                        </label>
                        <button type="submit" name="lo" class="btn btn-login float-right">Submit</button>
                    </div>


                </form>
-->                <?php


                if(isset($_POST['lo'])){

                    //  $conn = mysqli_connect("localhost","vGraphics", "admin@1234","vishalGraphics");
                    include 'connect.php';
                    $user=  htmlentities($_POST['email']);
                    $pass = md5(htmlentities($_POST['password']));
                    //echo "".$pass."<br>";
                    $query = "select  * from tbllogin where email='".$user."' and password='".$pass."'";

                    if($check = mysqli_query($conn,$query)){
                        //   echo "<br>".$pass;
                        while($value = mysqli_fetch_assoc($check)){
                            if(count($value['id'])==1){
                                session_start();
                                $_SESSION['userLogin']=$value['fname'];
                                $_SESSION['email']=$value['email'];
                                $_SESSION['mobile']=$value['mobile'];
                                $_SESSION['uId']=$value['id'];
                                if($value['flag']=='1') {
                                    echo "<script> location.href='normaldashboard.php' </script>";
                                }
                                //echo "sucess";
                            }else{
                                echo "Invalid Username or Password";
                            }

                            //echo "".$pass;
                            // session_start();
                            //   $_SESSION['user']=$user;
                            //echo "<script> location.href='addProduct.php' </script>";

                        }
                    }else{
                        echo 'Invalid User Name Or Password v';
                    }



                }
                ?>



            </div>

            </div>

        </div>

</section>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6" style="background-color: white;">
            <h2 class="text-center">Login</h2>
            <form class="login-form" method="post" action="">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-uppercase" >Username</label>
                    <input type="text" class="form-control"name="email" placeholder="">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase" >Password</label>
                    <input type="password" class="form-control"name="password" placeholder="">
                </div>


                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        <small>Remember Me</small>
                    </label>
                    <button type="submit" name="lo" class="btn btn-login float-right">Submit</button>
                </div>


            </form>
        </div>
        <div class="col-sm-6" style="background-color: white;" align="center">
            <div class="col-sm-6 banner-sec ">
                <br><br><br><br>
                <a href="register.php" button type="submit" name="lo" class="btn btn-register float-right" style="padding-right">Register as Industry</a button>
                <br><br>
                <button type="submit" name="lo" class="btn btn-individual float-right">Register as Individual</button>

            </div>

        </div>

    </div>

</div>

</body>
</html>
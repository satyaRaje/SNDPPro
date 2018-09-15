<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <title>IPRO3D-Contact_Us</title>
    <style>
        body{
            width:100%;
            height:100%;
            font-family: 'Roboto Condensed', sans-serif;

        }


        h1,h2,h3 {
            margin:0 0 35px 0;
            font-family: 'Patua One', cursive;
            text-transform: uppercase;
            letter-spacing:1px;
            color:black;
        }

        p{
            margin:0 0 25px;
            font-size:18px;
            line-height:1.6em;
            color:black;
        }
        a{
            color:black;
        }
        a:hover,a:focus{
            text-decoration:none;
            color:black;
        }

        #contact{
            background:#DCDCDC;
            color:#333333;
            color:#f4f4f4;
            padding-bottom:80px;
            color:black;
        }

        textarea.form-control{
            height:100px;
            color:black;
        }
    </style>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php include '../header.php';?>
    </div>
</div>
<br><br><br>
<form method="post" action="">
    <section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
                <h2>Registration Form</h2>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label for="exampleInputName2">Name</label>



                            <input type="text" class="form-control" name="fname" placeholder="Enter your name">

                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail2">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="abc@gmail.com">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Mobile</label>
                            <input type="text" class="form-control" name="mobileno" maxlength="10" placeholder="Enter 10-digit Number">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Password</label>
                            <input type="text" class="form-control" name="pwd" maxlength="16" placeholder="Enter 16 character password">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Confirm Password</label>
                            <input type="text" class="form-control" name="cpwd" maxlength="16" placeholder="Enter same password">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Gender</label></br>
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female
                        <input type="radio" name="gender" value="other"> others
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail2">Job Description</label>
                            <input type="text" class="form-control" name="jobdesc" maxlength="20" placeholder="Enter Job Description">
                        </div>



                        <div class="form-group">
                            <label for="exampleInputEmail2">Address</label>
                            <input type="text" class="form-control" name="address" maxlength="40" placeholder="Enter address">
                        </div>

                        <div class="dropdown">
                            <label for="exampleInputEmail2">City</label>
                            <select input type="text" class="form-control" name="city" maxlength="30" placeholder="city">

                                <option value="Student">Studen</option>
                                <option value="Industry">Industry</option>
                                <option value="Employee">Employee</option>
                                <option value="designer">Designer</option>
                                <option value="maker">Maker</option>
                                <option value="professional">Professional</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <br><br>

                        <div class="dropdown">
                            <label for="exampleInputEmail2">State</label>
                            <select input type="text" class="form-control" name="state" maxlength="40" placeholder="state">

                                <option value="Student">Student</option>
                                <option value="Industry">Industry</option>
                                <option value="Employee">Employee</option>
                                <option value="designer">Designer</option>
                                <option value="maker">Maker</option>
                                <option value="professional">Professional</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <br><br>





                        <div class="dropdown">
                            <label for="exampleInputEmail2">Country</label>
                            <select input type="text" class="form-control" name="country" maxlength="40" placeholder="country">

                                <option value="Student">Student</option>
                                <option value="Industry">Industry</option>
                                <option value="Employee">Employee</option>
                                <option value="designer">Designer</option>
                                <option value="maker">Maker</option>
                                <option value="professional">Professional</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <br><br>

                        <div class="form-check">
                            <label class="form-check-label">

                            </label>
                            <button type="submit" name="lo" class="btn btn-login float-right" style="background-color:whitesmoke " >Register</button><br><br>
                            <small>Remember Me</small>
                            <input type="checkbox" class="form-check-input">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

</form>

<?php
if(isset($_POST['enquire'])){
    $query= "INSERT INTO `tblEnquiry`(`name`, `mobile`, `email`, `course`) VALUES ('".$_POST['fname']."','".$_POST['mobileno']."','".$_POST['email']."','".$_POST['message']."')";
    $conn = mysqli_connect("localhost","root", "","dbipro3d");
    $check = mysqli_query($conn,$query);
    $to = "kad.gaurav.gaurav447@gmail.com";
    $subject = "Email Enquiry : ";
    $txt = "Student Name : ".$_POST['name']." Requirement's : ".$_POST['course']." Mobile No. : ".$_POST['mobile']." Email Address : ".$_POST['email'];
    $headers = "From: mit@arkay.org" . "\r\n" .
        "CC: kad.gaurav.gaurav447@gmail.com";
    mail($to,$subject,$txt,$headers);

    echo "<script>alert('Thanks For Quote...!');</script>";
}

?>
<div class="container-fluid" style="background-color: black;color: whitesmoke;">
    <div class="row">
        <?php include '../footer.php';?>
    </div>
</div>
</body>

</html>
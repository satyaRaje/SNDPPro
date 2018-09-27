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
                <h2>COMPANY PROFILE > COMPANY DETAILS </h2>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">


                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail2">Company Name</label>
                            <input type="email" class="form-control" name="compnamae" placeholder="Enter Company Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Date of Format</label>
                            <input type="text" class="form-control" name="dateofformat" maxlength="10" placeholder="mm/dd/yy">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Phone No. Format</label>
                            <input type="text" class="form-control" name="noformat" maxlength="16" placeholder="+Country Code-12345">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Default Country Code</label>
                            <input type="text" class="form-control" name="countrycode" maxlength="16" placeholder="India(+91)">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail2">Default Currency </label>
                            <input type="text" class="form-control" name="defcurrency" maxlength="20" placeholder="Enter Default currency">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail2">Time Zone</label>
                            <input type="text" class="form-control" name="timezone" maxlength="40" placeholder="(GMT+05:30)chennai,mumbai,hydrabad">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Website</label>
                            <input type="text" class="form-control" name="website" maxlength="40" placeholder="www.abc.com">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Street1</label>
                            <input type="text" class="form-control" name="street1" maxlength="40" placeholder="Enter street1">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Street2</label>
                            <input type="text" class="form-control" name="street2" maxlength="40" placeholder="Enter street2">
                        </div>


                        <div class="dropdown">
                            <label for="exampleInputEmail2">City</label>
                            <select input type="text" class="form-control" name="city" maxlength="30" placeholder="city">

                                <option value="Student">Aurangabad</option>
                                <option value="Industry">Hydrabad</option>
                                <option value="Employee">Benglore</option>
                                <option value="designer">Ahemedabad</option>
                                <option value="maker">Surat</option>
                                <option value="professional">Mumbai</option>
                                <option value="other">Pune</option>
                            </select>
                        </div>
                        <br><br>

                        <div class="dropdown">
                            <label for="exampleInputEmail2">State</label>
                            <select input type="text" class="form-control" name="state" maxlength="40" placeholder="state">

                                <option value="Student">Maharashtra</option>
                                <option value="Industry">Gujrat</option>
                                <option value="Employee">Uttarpradesh</option>
                            </select>
                        </div>
                        <br><br>



                        <div class="dropdown">
                            <label for="exampleInputEmail2">Country</label>
                            <select input type="text" class="form-control" name="country" maxlength="40" placeholder="country">

                                <option value="Student">India</option>
                                <option value="Industry">Japan</option>
                                <option value="Employee">USA</option>
                            </select>
                        </div>
                        <br><br>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Fax</label>
                            <input type="text" class="form-control" name="fax" maxlength="40" placeholder="Enter Fax">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Phone</label>
                            <input type="text" class="form-control" name="phone" maxlength="10" placeholder="Enter phone">
                        </div>


                        <div class="form-check">
                            <label class="form-check-label">

                            </label>
                            <button type="save" name="lo" class="btn btn-login float-right" style="background-color:whitesmoke " >Save</button><br><br><button type="edit" name="lo" class="btn btn-login float-right" style="background-color:whitesmoke " >Edit</button><br><br>
                            <button type="cancel" name="lo" class="btn btn-login float-right" style="background-color:whitesmoke " >Cancel</button><br><br>

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
    $to = "hello@ipro3d.io";
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
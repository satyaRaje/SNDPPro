<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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
        }

        p{
            margin:0 0 25px;
            font-size:18px;
            line-height:1.6em;
        }
        a{
            color:#26a5d3;
        }
        a:hover,a:focus{
            text-decoration:none;
            color:#26a5d3;
        }

        #contact{
            background:#f4f4f4;
            color:#333333;
            padding-bottom:80px;
        }

        textarea.form-control{
            height:100px;
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
                <h2>Quote</h2>
                <p>Feel free to shout us by feeling the contact form or visiting our social network sites like Facebook,Whatsapp,Twitter.</p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label for="exampleInputName2">Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="Enter your Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail2">Mobile</label>
                            <input type="text" class="form-control" name="mobileno" maxlength="10" placeholder="Enter 10-digit Number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email ID">
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputText">Upload Yout File</label>
                            <input  type="file" class="form-control" name="image" placeholder="File">
                        </div>


                        <div class="form-group ">
                            <label for="exampleInputText">Your Message</label>
                            <textarea  class="form-control" name="message" placeholder="Description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default" name="enquire">Send Message</button>

                        <hr>
                        <h3>Our Social Sites</h3>
                        <ul class="list-inline banner-social-buttons">
                            <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                            <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                            <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</form>

<?php
if(isset($_POST['enquire'])){
    echo $_POST['image'];
    $query= "INSERT INTO tblquote(`name`, `mobile`, `email`, `course`,link) VALUES ('".$_POST['fname']."','".$_POST['mobileno']."','".$_POST['email']."','".$_POST['message']."','".$_POST['image']."')";
    $conn = mysqli_connect("localhost","root", "","dbipro3d");
    $check = mysqli_query($conn,$query);
    $to = "kad.gaurav.gaurav447@gmail.com";

    if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

        $expensions= array("jpeg","jpg","png","pdf");

        /*   if(in_array($file_ext,$expensions)=== false){
              $errors[]="extension not allowed, please choose a JPEG or PNG file.";
           }

           if($file_size > 2097152000){
              $errors[]='File size must be excately 2 MB';
           }
           */
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"../doc/".$_POST['image']);
            echo "Success";
        }else{
            print_r($errors);
        }
    }

    $subject = "Email Enquiry : ";
    $txt = "Student Name : ".$_POST['name']." Requirement's : ".$_POST['course']." Mobile No. : ".$_POST['mobile']." Email Address : ".$_POST['email'];
    $headers = "From: mit@arkay.org" . "\r\n" .
        "CC: kad.gaurav.gaurav447@gmail.com";
    mail($to,$subject,$txt,$headers);

    echo "<script>alert('Thanks For Enquiry...!');</script>";
}

?>
<div class="container-fluid" style="background-color: black;color: whitesmoke;">
    <div class="row">
        <?php include '../footer.php';?>
    </div>
</div>
</body>

</html>
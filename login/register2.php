<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <link rel="stylesheet" href="register1_css.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <a href="login2.php"><input type="submit" name="" value="Login"/></a><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="register1.php" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#home" role="tab" aria-controls="profile" aria-selected="false">Student</a>
                            </li>
                        </ul>
                        </br>
                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading" style="width:100%">Register here as a Student</h3>
                                <div class="row register-form">
                                    <div class="container" style="width:100%">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" style="width:100%"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" style="width:100%"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" style="width:100%"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" style="width:100%"/>
                                        </div>
                                        <div class="form-group" style="width:100%">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                   
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" style="width:100%"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" style="width:100%"/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" style="width:100%"/>
                                        </div>
										<div class="form-group">
                                        <input type="submit" class="btnRegister" style="width:100%" value="Register"/>
					                                           
                                        </div>
                                   </div>
                                </div>
                            </div>
                         </div>
                        </div>
                    </div>
                </div>

            </div>
	</div>	
</html>	
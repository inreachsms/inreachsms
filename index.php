<!DOCTYPE html>
<html>
	<html>
		<title>Adventist SMS CENTRE</title>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/sms.css">
		<link rel="stylesheet" type="text/css" href="css/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/css/animate-custom.css" />
	</head>
	<body>
		<div class="twilio">
			<?php require 'twilio.php';?>
		</div>
		<top>
            <img src="img/frontlogo.png">
            <div class="socialmedia" style="float: right; font-size: 25px; color: #81a33c;">
                <i class="fa fa-facebook "></i>
                <i class="fa fa-whatsapp "></i>
                <i class="fa fa-instagram "></i>
                <i class="fa fa-twitter "></i>
                <i class="fa fa-google+ "></i>
                <i class="fa fa-gmail "></i>
            </div>

             <div>
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="myNavbar" style="margin-left: 120px;">
                  <ul class="nav navbar-nav navbar-left">
                  	<li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="#portfolio">PRICING</a></li>
                    <!-- <li><a href="#pricing">PRICING</a></li> -->
                    <li><a href="#contact">RESELLER</a></li>
                    <li><a href="#services">FAQ</a></li>
                    <li><a href="#services">DOWNLOADS</a></li>
                    <li><a href="#services">CONTACT</a></li>
                  </ul>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#register">SIGNUP</a></li>
                        <li><a href="#login">LOGIN</a></li>
                    </ul>
                </div>
              </div>
            </nav>
        </div>

        </top>

		<header class="container-fluid top" style="margin-top: 0px; width: 100%; height: 100%;">
		    <div class="row">
			  	<div>
				  	<h3 class="heading" style="font-size: 40px;"><span style="font-size: 80px;">I<span>n</span></span>Reach</h3>
			  		<h4 class="sms">SMS</h4>
			  		<h2 class="centre"><span style="font-size: 70px;font-weight: 900;color: gold">C</span>entre</h2>
		  		</div>
			  	<div>
				  	<!-- <img src="img/smsin.jpg" alt="..." class="img-rounded" style="margin-left: 200px;height: 370px;"> -->
						<p class="info">Send message across to all members of the family, with the help ASMSC website.<br>
						Very quick and fast, so much reliable</p>
					<marquee style="color: deepskyblue;text-align: center;">Do you desire to also become a web devloper in few weeks? Why worry it very easy Join our team on whatsapp 08109601300</marquee>
				</div>	
			</div>
		</header>	
		<about class="container">
			<div class="container">
				<h1 class="about" id="about">ABOUT US</h1>
				<p style="font-size: 25px; font-family: serif; text-align: left;">Are you looking for a professional bulk SMS Nigeria text messaging plaform? InReachSMS is the answer to all your bulk SMS service needs in Nigeria, with an exemplary delivery to all GSM networks. This is a unique and professional bulk SMS Nigeria text messaging plaform that has robust user-friendly features.<br>
				Our bulk SMS plaform is rated as the most effective and highly efficent bulk SMS website in Nigeria with unbeatable records in terms of user-friendliness, reliability, speed, delivery and users' mission accomplishments<br></p>

				<p style="font-family: serif; font-size: 25px; text-align: left;">. . . the Bulk SMS gateway designed specifically for you!<br>
					AdventistSMSCentre makes it amazingly easy and very
					affordable to send SMS to many phone numbers at
					once either through this Website, the Desktop
					Application, the Mobile Application or without 
					the internet.</p>

			<!-- 	<p style="font-size: 25px; font-family: serif;" >Are you looking for a professional bulk SMS Nigeria text messaging plaform? InReachSMS is the answer to all your bulk SMS service needs in Nigeria, with an exemplary delivery to all GSM networks. This is a unique and professional bulk SMS Nigeria text messaging plaform that has robust user-friendly features.<br>
				Our bulk SMS plaform is rated as the most effective and highly efficent bulk SMS website in Nigeria with unbeatable records in terms of user-friendliness, reliability, speed, delivery and users' mission accomplishments<br></p> -->
			</div>
		</about>
		<section class="container section" style="margin-top: -300px;">
		  <div class="row" style="margin-top: 50px;">
			<div class="col-md-6">
				<div>
					<!-- <form>
					  <div class="form-group">
					    <label class="sr-only" for="exampleInputEmail3">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label class="sr-only" for="exampleInputPassword3">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox"> Remember me
					    </label>
					  </div>
					  <button type="submit" class="btn btn-default">Sign in</button>
					</form> -->

					<div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form" style="margin-left: 2px;">
                            <form  action="mysuperscript.php"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="username or e-mail"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="password" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a staff yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" style="margin-top: -100px;"> 
                                <h1 style="color: gold; margin-top: -10px"> Sign up </h1>
                                <p> 
                                    <label for="firstnamesignup" class="fname" data-icon="u"> First Name</label>
                                    <input id="firstnamesignup" name="firstnamesignup" required="required" type="text" placeholder="firstname" />
                                </p>
                                <p> 
                                    <label for="surnamesignup" class="sname" data-icon="u">Surname</label>
                                    <input id="surnamesignup" name="surnamesignup" required="required" type="text" placeholder="surname" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="username" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="e-mail"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="password"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="confirm password"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link" style="margin-bottom: -5px;">  
									Already a Staff ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>
				</div>
			</div>
			<div class="col-md-6">
				<div>
						<ul class="order">
						<h6 style="font-size: 25px;color: gold;">SMS MENU</h6>
						<hr>
					<li>Compose SMS</li>
					<li>SMS History</li>
					<li>Share SMS Unit</li>
					<li>Compose SMS</li>
					<li>Buy SMS</li>
					<li>Voucher Recharge</li>
					<li>Transaction History</li>
					<li>View Invoice</li>
					<li>Add Phonebook group</li>
					<li>Add a Contact</li>
					<li>Upload Contact</li>
					<li>View Contact list</li>
					<li>Add sender Names</li>
					<li>Add SMS Template</li>
					<li>View Template</li>
					<li>Account Summary</li>
					<li>Change Password</li>
					<li>Edit Profile</li>
					</ul>
				</div>		
			</div>
		</section>

		<footer class="bottom">
			<div class="row" style="margin-left: 5px; font-size: 15px;">
				<div class="col-xs-6 col-md-4">
					<div>
					<h1>Mode of payment</h1>
						<a><li>Online Payment</li></a>
						<a><li>Bank Deposit</li></a>
						<a><li>Paypal</li></a>
						<a><li>Quickteller</li></a>
						<a><li>E-Transact</li></a>
					</div>
				</div>

				<div class="col-xs-6 col-md-4">
					<a><li>Terms and condition</li></a>
					<a><li>FAQ</li></a>
					<a><li>Blog</li></a>
					<a><li>Online Payment</li></a>
				</div>

				<div class="col-xs-6 col-md-4">
					<li><i class="fa fa-phone ">08109601300</i></li>
					<li><i class="fa fa-phone ">08077323161</i></li>
					<li><i class="fa fa-envelope "><a href="#">inreachsms@gmail.com</a></i></li>
				</div>
			</div>
			<div>
				<p class="down">
					Copyright @Simeon_Peace 2018. Term and Condition Apply
				</p>
			</div>
		</footer>
		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
	  	<script src="js/test.js"></script>
	</body>
</html>
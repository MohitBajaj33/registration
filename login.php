<?php
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet" type="text/css"/>
    <title>Login</title>
	</head>
	<body>

	<div id="maunber">
            <div class="left">
                <img src="m.jpg" alt="sorry">
            </div>
            <div class="mid">
                <div id="nevbar">
                    <ul>

                        <li><a href="login.php"><span class="fa fa-home "
                                    style="font-size:15px; color:rgb(247, 242, 242);"></span>
                                Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#"><span class="fa fa-book "
                                    style="font-size:15px; color:rgb(245, 241, 241);"></span>
                                contant</a></li>
                        <li><a href="#">Serves</a></li>
                    </ul>
                </div>

            </div>

            <div class="right">
               <ul>
			    <li><a href="registatio.php">Registation</a></li>
				<li>|</li>
				<li><a href="login.php">Login</a></li>
			   </ul>
            </div>
        </div>
		<?php get_flashdata('masseg');?>
	
		<div class="content">
		<h1>Login</h1>
		
		<form action="handle-login.php" method="POST">
		<?php echo $_SESSION['error']['email'];?>
		<input type="email" name="email"  placeholder="Enter Email" value="<?php echo $_SESSION['data']['email'];?>"><br/>
	
		<?php echo $_SESSION['error']['password'];?>
		<input type="password" name="pass" placeholder="Enter Email password" />
		
		
		<a href="#">Forget Password?</a>
		<div class="sign">
		<input type="submit" name="sub" value="SIGN IN"/>
		</div>
		</form>
		<div class="icon" >
		<a href="https://www.facebook.com/"><span class="fa fa-facebook " style="font-size:20px; color:blue);";></span></a>
		 <a href="https://www.instagram.com/"><span class="fa fa-instagram " style="font-size:20px; color:blue);"></span></a>
		<a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"> <span class="fa fa-twitter " style="font-size:20px; color:blue);"></span></a>
		<a href="https://web.telegram.org/z/"><span class="fa fa-telegram " style="font-size:20px; color:blue);"></span></a>
		</div>
		
		</div>
	</body>
	
	</html>
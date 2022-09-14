<?php
include 'validation.php';

$msg = isset($_GET['msg'])?$_GET['msg']:null;
$msg_error = '';
switch ($msg) {
    case 1:
        $msg_error = '<span style="color:red";>Maximum Allowed Size is 5KB se 20KB</span>';

        break;
    
    case 2:
        $msg_error = '<span style="color:red";>Only Images Extanstion Jpeg,png,jpg is allowed: </span>';
        
        break;
		  
		case 2:
			$msg_error = '<span style="color:red";>Required  </span>';
			
			break;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&display=swap" rel="stylesheet">
	<link href="css/ragitation.css" rel="stylesheet" type="text/css"/>
    <title>Registation</title>
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
			    <li><a href="registatio.php">Registration</a></li>
				<li>|</li>
				<li><a href="login.php">Login</a></li>
			   </ul>
            </div>
        </div>
		
		<div class="contant">
		<h1>Registation </h1>
		<form action="handle-registation.php" method="POST" enctype="multipart/form-data">
		<table id="tdata">
		<tr><td>Name<span style="color:red;">* &nbsp&nbsp<?php echo set_error('name');?></span></td> 
		<td> Father Name<span style="color:red;">* &nbsp&nbsp<?php echo set_error('fname');?></span></td></tr>
		<tr><td><input type="text" name="name" placeholder="Enter Name" value="<?php echo set_value('name');?>"/></td>
		 <td><input type="text" name="fname" placeholder="Enter F'Name" value="<?php echo set_value('fname');?>"/></td></tr>
		
		<tr><td>Gender<span style="color:red;">* &nbsp&nbsp<?php echo set_error('gender');?></span></td> 
		<td>Category<span style="color:red;">* &nbsp&nbsp<?php echo set_error('category');?></span></td></tr>
		<tr><td><input type="radio" name="gender" value="Male"/>Male &nbsp <input type="radio" name="gender" value="Female"/>Female
		&nbsp <input type="radio" name="gender" value="other"/>Other</td>
        <td>
        <select name="category">
        <option value="" >Select Category</option>
        <option value="Genral">GEN(General)</option>
        <option value="Other Backward">OBC(Other backward)</option>
        <option value="Scheduled caste">SC(Scheduled caste)</option>
        <option value="Scheduled Tribe">ST(Scheduled Tribe)</option>
		</select>
		</td>		
		</tr>
		
		<tr><td>Email Addrass<span style="color:red;">* &nbsp&nbsp<?php echo set_error('email');?></span></td> 
		<td>Date of Birth<span style="color:red;">* &nbsp&nbsp<?php echo set_error('dob');?></span></td></tr>
		<tr><td><input type="email" name="email" placeholder="Enter Email" value="<?php echo set_value('email');?>"/></td> 
		<td><input type="date" name="dob" value="<?php echo set_value('dob');?>"/></td></tr>
		
		<tr><td>Mobile<span style="color:red;">* &nbsp&nbsp<?php echo set_error('mobile');?></span></td> 
		<td>Aadar No.<span style="color:red;">* &nbsp&nbsp<?php echo set_error('aadar');?></span></td></tr>
		<tr><td><input type="number" name="mobile" placeholder="Enter Mobile No" value="<?php echo set_value('mobile');?>"/>
	</td> <td><input type="number" name="aadar" placeholder="Enter Aadar No" value="<?php echo set_value('aadar');?>"/></td></tr>
		
		<tr><td>Password<span style="color:red;">* &nbsp&nbsp<?php echo set_error('pass');?></span></td> 
		<td>Confirm Password <span style="color:red;">* &nbsp&nbsp<?php echo set_error('conpass');?></span></td></tr>
		<tr><td><input type="password" name="pass" placeholder="password" /></td>
		<td><input type="password" name="conpass" placeholder="Confirm Password" /></td>
		
		</tr>
		<tr>
		<td>Uplode Photo<span style="color:red;">*</span></td><td><input type="file" name="photo"/> 
		<span style="color:red"><?php echo $msg_error ;?></span></td>
		
		</tr>
		
		
		<tr> <td> <span class="capcher">
		<?php 
		 $cap=chr(rand(65,90)).rand(0,9).chr(rand(65,90)).rand(0,9).chr(rand(65,90)).rand(0,9);
		echo $cap; ?>   </span></td>
		<td> <input type="text" name="cp"/></td>
		</tr>
		
		<tr><td><input type="checkbox"/>Check Information <span style="color:red;">*</span></td></tr>
		<div id="botton">
	    <tr><td><input style="background-color:#11749d; border-radius:10px; " type="submit" name="submit" value="submit"/>
		<input style="background-color:#11749d; border-radius:10px; " type="reset" name="reset" value="Reset"/></td></tr>
		</div>
		</table>
		
		</form>
		
		</div>
		</body>
		</html>
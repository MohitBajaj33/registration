<?php
	   include 'connect.php';
	    include 'function.php';
       
	   get_flashdata('masseg');
	   if (isset($_POST['sub'])){
		   $email = $_POST['email'];
		   $password = $_POST['pass'];
		   $select = "select email,password from ragistation where email='$email' and password='$password'";
		  $res= mysqli_query($conn,$select);
		   $result= mysqli_fetch_array($res);
		   
		   // Email Handling
		   if(empty($email)){
			   $_SESSION['error']['email'] = '<span style="color:red";>*Email is Required</span>';
			   $_SESSION['data']['email'] = '';
		   }else{
			   $_SESSION['data']['email'] =$email;
			   $_SESSION['error']['email'] ='';
		   }
		   
		   //Password Handling
		   if(empty($password)){
			$_SESSION['error']['password'] = '<span style="color:red" ;>*Email is Required</span>';
			$_SESSION['data']['password'] = '';
		}else{
			$_SESSION['data']['password'] =$password;
			$_SESSION['error']['password'] ='';
		}

		   if($result){
                 echo '<script> 
				 alert("Login Successfully") ;
				 </script>';
				 header("location:dasbod.php");
				
                  
            
                 
		   }else{ 
		   set_flashdata('masseg',danger('Invalid Email and password'));
			header("location:login.php");
			
		   }
	   }
	
	?>
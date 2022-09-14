<?php
		include 'connect.php';
        include 'validation.php';
		include 'function.php';
        if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['submit']) and !empty($_POST)){
			
			$name = $_POST['name'];
			$fname = $_POST['fname'];
            $gender = $_POST['gender'];
			$category = $_POST['category'];
			$email = $_POST['email'];
			$DOB = $_POST['dob'];
			$mobile = $_POST['mobile'];
			$aadar = $_POST['aadar'];
			$password = $_POST['pass'];
			$con_password = $_POST['conpass'];

			$pic_aar = $_FILES['photo'];
            $pic_name = $pic_aar['name'];
             $pic_name_info = pathinfo($pic_name);
             $file_name = $pic_name_info['filename'];
             $file_extension = $pic_name_info['extension'];
             $file_real_name = $file_name.'_'.time().'.'.$file_extension;
             

            $pic_type = $pic_aar['type'];
            $pic_tmp_name = $pic_aar['tmp_name'];
           
            $pic_error = $pic_aar['error'];
            $pic_size = floor($pic_aar['size']/1024);

			$capcher = $_POST['cp'];

            $allowed_type =array('image/jpeg','image/png','image/jpg');

            $rulse = array(

                'name' => array(
                    'rule' => 'Required',
                    'error' => 'Name is Required',
                    'match' => 'patten',
                ),
                'fname' => array(
                    'rule' => 'Required',
                    'error' => 'Fname is Required',
                    'match' => 'patten',
                ),
                'gender' => array(
                    'rule' => 'Required',
                    'error' => 'Gender is Required',
                    'match' => 'patten',
                ),
                'category' => array(
                    'rule' => 'Required',
                    'error' => 'Category is Required',
                    'match' => 'patten',
                ),
                'email' => array(
                    'rule' => 'Required',
                    'error' => 'Email is Required',
                    'match' => 'patten',
                ),
                'dob' => array(
                    'rule' => 'Required',
                    'error' => 'DOB is Required',
                    'match' => 'patten',
                ),
                'mobile' => array(
                    'rule' => 'Required',
                    'error' => 'Mobile No. is Required',
                    'match' => 'patten',
                ),
                'aadar' => array(
                    'rule' => 'Required',
                    'error' => 'Aadar No is Required',
                    'match' => 'patten',
                ),
                'pass' => array(
                    'rule' => 'Required',
                    'error' => 'Password is Required',
                    'match' => 'patten',
                ),
                'conpass' => array(
                    'rule' => 'Required',
                    'error' => 'Conform Password is Required',
                    'match' => 'patten',
                ),
                
            
            );
            make_validation($_POST,$rulse);
			$insert ="insert into ragistation(name,fname,gender,category,email,DOB,mobile_no,aadar_no,password,con_password,photo)
			values('$name','$fname','$gender','$category','$email','$DOB','$mobile','$aadar','$password','$con_password','$file_real_name')";
			if($password==$con_password){
                if(!empty($pic_aar)){
                if(in_array($pic_type,$allowed_type)){
                    if($pic_size>=5 and $pic_size<=20){
                        if($pic_error===0){
                            if(move_uploaded_file($pic_tmp_name ,"uploads/$file_real_name")){
                                
                            }
   
                        }else{
                            header("location:registation.php");
                            exit;
   
                        }
   
                    }else{
                        
                        echo '<script>
                        window.location = "registatio.php?msg=1";
                        </script>';
                        exit;
                    }
   
                }else{
                    
                    echo '<script>
                    window.location = "registatio.php?msg=2";
                    </script>';
                    exit;
                }
            }else{
                echo '<script>
                    window.location = "registatio.php?msg=3";
                    </script>';
                    exit;
            }
		

			if(mysqli_query($conn,$insert)){
					set_flashdata('masseg',success('Registation Successfull !'));
				echo '<script>
				alert("Registation Successfull!");
				window.location = "login.php";
				</script>';
			
			}else{
				
				echo '<script>
				alert("ome error occured!");
				window.location = "registatio.php";
				</script>';
			}
			
	  }else{
		  
		  echo'
		  <script>
		  alert("Password and Confirm password does not match!");
		  window.location = "";
		  </script>';
	  }
			}

        }else{
           // header("location:registation.php");
           echo '<script>
				
				window.location = "registatio.php";
				</script>';
        }
		
		?>
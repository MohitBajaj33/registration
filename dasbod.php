<?php 
include 'connect.php';
include 'handle-login.php';



$select_query ="select * from ragistation where email='{$_SESSION['data']['email']}'";
$delet_query ="DELETE FROM `ragistation` WHERE  email='{$_SESSION['data']['email']}'";
$result= mysqli_query($conn,$select_query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table{
            width: 80%;
           
        }
        table td{
            width: 30%;
            text-align:center;
        }
        table th{
            width: 20%;
        }
        table td img{
               width: 50px;
    height: 50px;
        }

    </style>
</head>
<body>

    <?php
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        echo "
       <table border=1 align='center' cellspacing='0px' cellpadding='5px'>
      
       <tr>
       <th> Registaton No : {$row['id']}</th>
       <td id='photo'><img src= 'uploads/{$row['photo']}' alt=''></td>
       </tr>

       <tr>
       <th>Student Name</th>
       <td>{$row['name']}</td>
       </tr>

       <tr>
       <th>Student Father Name</th>
       <td>{$row['fname']}</td>
       </tr>

       <tr>
       <th>DOB</th>
       <td>{$row['DOB']}</td>
       </tr>

       <tr>
       <th>Email Address</th>
       <td>{$row['email']}</td>
       </tr>

       <tr>
       <th>Gender</th>
       <td>{$row['gender']}</td>
       </tr>
       <tr>
       <th>Category</th>
       <td>{$row['category']}</td>
       </tr>
       <tr>
       <th>Mobile No</th>
       <td>{$row['mobile_no']}</td>
       </tr>
       <tr>
       <th>Aadar No</th>
       <td>{$row['aadar_no']}</td>
       </tr>

       
       </table>";
    }
  
    ?>
    
</body>
</html>
<html>
<head>
<title>Ragistation data</title>
</head>
<body>
<h1> Show data </h1>
<table border=1px cellspacing="5px" cellpadding=2px width="90%">
<?php 
include 'connect.php';
$query="select * from ragistation where name='mohit bajaj'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
	
	?>
	
	<tr>
	<th>Student Name</th>
	<td><?php echo $row["name"]; ?></td>
	</tr>
	<tr>
	<th>Student F'Name</th>
	<td> <?php echo $row["fname"]; ?></td>
	</tr>
	<tr>
	<th>Gender</th>
	<td> <?php echo $row["gender"]; ?></td>
	</tr><tr>
	<th>Category</th>
	<td> <?php echo $row["category"]; ?></td>
	</tr>
	<tr>
	<th>Email Address</th>
	<td> <?php echo $row["email"]; ?></td>
	</tr>
	<tr>
	<th>Date of Birth</th>
	<td> <?php echo $row["DOB"]; ?></td>
	</tr>
	<tr>
	<th>Student Mobile No.</th>
	<td> <?php echo $row["mobile_no"]; ?></td>
	</tr>
	<tr>
	<th>Student Aadar No.</th>
	<td> <?php echo $row["aadar_no"]; ?></td>
	</tr>
	<tr>
	
<?php	
}

?>

</table>
</body>
</html>





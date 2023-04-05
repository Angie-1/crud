<?php

include("config.php");

// Check if form is submitted for student update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$fullname=$_POST['fullname'];
	$course=$_POST['course'];
	$email=$_POST['email'];
	$phonenumber=$_POST['phonenumber'];
		
	
	$result = mysqli_query($mysqli, "UPDATE studentsdata SET fullname='$fullname',course='$course', email='$email',phonenumber='$phonenumber' WHERE id=$id");
	
	// Redirect
	header("Location: index.php");
}
?>
<?php

// Getting id from url
$id = $_GET['id'];

// Fetech student with id
$result = mysqli_query($mysqli, "SELECT * FROM studentsdata WHERE id=$id");

while($row = mysqli_fetch_array($result))
{
	$fullname = $row['fullname'];
	$course = $row['course'];
	$email = $row['email'];
	$phonenumber = $row['phonenumber'];
}
?>
<html>
<head>
<link rel="stylesheet" href="style.css">	
	<title>Edit Student Data</title>
</head>

<body>
<div class="navbar">
	<a href="index.php">Home</a>
	<br/><br/>
</div>
	<form name="update_student" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Fullname</td>
				<td><input type="text" name="fullname" value=<?php echo $fullname;?>></td>
			</tr>
			<tr> 
				<td>Course</td>
				<td><input type="text" name="course" value=<?php echo $course;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr> 
				<td>Phonenumber</td>
				<td><input type="text" name="phonenumber" value=<?php echo $phonenumber;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>


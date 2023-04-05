<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Add Student</title>
</head>

<body>
<div class="navbar">
	<a href="index.php">Go to Home</a>
	<br/><br/>
</div>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Fullname</td>
				<td><input type="text" name="fullname" required/></td>
			</tr>
			<tr> 
				<td>Course</td>
				<td><input type="text" name="course" required/></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" required/></td>
			</tr>
			<tr> 
				<td>Phonenumber</td>
				<td><input type="text" name="phonenumber" required/></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	
	if(isset($_POST['Submit'])) {
		$fullname = $_POST['fullname'];
		$course = $_POST['course'];
		$email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		
		// include database connection file
		include("config.php");
				
		// Insert student data into table
		$result = mysqli_query($mysqli, "INSERT INTO studentsdata(fullname,email,course,phonenumber) VALUES('$fullname','$email','$course','$phonenumber')");
		
		// Show message when student is added
		echo "Student added successfully. <a href='index.php'>View Students</a>";
	}
	?>
</body>
</html>

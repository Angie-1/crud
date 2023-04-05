<?php
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT fullname, course, email, phonenumber, id FROM `studentsdata`");

?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">

       <a href="add.php" class="">Add New Student</a> 
        <a href="#">Home</a>
    </div>

    <table>
        <tr>
            <th>Fullname</th>
            <th>Course</th>
            <th>Email</th>
            <th>phonenumber</th>
            <th>Update</th>
        </tr>
        <?php  
        while($rows = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$rows['fullname']."</td>";
            echo "<td>".$rows['course']."</td>";
            echo "<td>".$rows['email']."</td>";  
            echo "<td>".$rows['phonenumber']."</td>";   
            echo "<td><a href='edit.php?id=$rows[id]'>Edit</a> | <a href='delete.php?id=$rows[id]'>Delete</a></td></tr>";        
        }
        ?>
    </table>
</body>
</html>

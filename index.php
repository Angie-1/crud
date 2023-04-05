<?php



include('registration.html');
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        
        $fullname = $_POST['fullname'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
    }

    include('config/db_connect.php');

    // using sql to create a data entry query
    $sql = "INSERT INTO studentsdata (fullname, course, email, phonenumber) VALUES ('$fullname', '$course', '$email', '$phonenumber')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($conn, $sql);
    if($rs)
    {
        echo "Added Successfully!";
    }
        header('location:dashboard.php');
    
  
    // close connection
    mysqli_close($conn);

?>





?>
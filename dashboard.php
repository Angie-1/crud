<?php

include('config/db_connect.php');
//write query for all pizzas

// // $sql = 'SELECT * FROM pizzastable'
// $sql = 'SELECT fullname, course, email, phonenumber, id FROM studentsdata';

// //make query and get results
// $result = mysqli_query($conn, $sql);

// //fetch the resulting rows as an array
// $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
// // print_r($pizzas);

// //free results from memory best practice
// mysqli_free_result($result);

// //close connection to the database
// mysqli_close($conn);
  // SQL QUERY
  $query = "SELECT * FROM `studentsdata`;";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
  
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo "Student No: " .
                $row["id"]. " - Name: " .
                $row["fullname"]. " | Course: " . 
                $row["course"]. " | Email: " . 
                $row["email"]. " | Phonenumber: " .
                $row["phonenumber"]. "<br>";
               
        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();

 
?>
<!DOCTYPE html>
<html>




  




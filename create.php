<?php
    require_once 'connection.php';

   $first_name= $_POST['first_name'];
   $last_name= $_POST['last_name'];
   $matricula= $_POST['matricula'];



    $post= "INSERT INTO users(primary_name, last_name, matricula) VALUES('$first_name','$last_name','$matricula')";
    if(mysqli_query($con, $post)){
        header('location:index.php');
    } else {
        echo "ERROR: CREATE";
    }

// $sql = "INSERT INTO users (primary_name, last_name, matricula) VALUES ('John', 'Doe',12345678)";

//     if (mysqli_query($con, $sql)) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     }
    
    mysqli_close($con);
?>
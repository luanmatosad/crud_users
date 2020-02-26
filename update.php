<?php
    require_once 'connection.php';

    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $matricula = $_POST['matricula'];

    $post ="UPDATE `users` SET primary_name ='$first_name',last_name =' $last_name', matricula = '$matricula' WHERE id='$id'";
    if(mysqli_query($con, $post)){

      
       header("location:index.php");
        // echo   $first_name = $_POST['first_name'];
        // echo   $last_name = $_POST['last_name'];
        // echo    $matricula = $_POST['matricula'];
      
    } else {
        echo "ERROR: UPDATE". mysqli_error($con);
    }

//     $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

// if (mysqli_query($conn, $sql)) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . mysqli_error($conn);
// }
mysqli_close($con);
?>
<?php
$con = mysqli_connect("127.0.0.1","root","", "mydata");
// if($con -> connect_errno){
//     echo "ERROR:CONNECTION";
// }
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
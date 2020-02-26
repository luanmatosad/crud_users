<?php
 require_once 'connection.php';

 $id = $_GET['id'];

 $post = $con -> query("DELETE FROM users WHERE id='$id'");
 if($post){
     header("location:index.php");
 } else {
     echo "ERROR: DELETE";
 }
?>
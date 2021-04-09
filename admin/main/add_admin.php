<?php
session_start();
include_once("../../config.php");

if(isset($_POST["aadd"])){
    $name=$_POST["aname"];
    $email=$_POST["aemail"];
    $password=$_POST["apass"];
    $cpassword=$_POST["acpass"];

    if($password == $cpassword){
        $query="insert into admin (name, email, password) values('$name','$email','$password')";
        $run=mysqli_query($con, $query);
        if($run){
            header("Location:../add_admin.php?admin_added");
        }
    }
}
?>
<?php
session_start();
include_once("../../config.php");

if(isset($_POST["dadd"])){
    $name=$_POST["dname"];
    $email=$_POST["demail"];
    $mode=$_POST["mode"];
    $password=$_POST["dpass"];
    $cpassword=$_POST["dcpass"];

    if($password == $cpassword){
        $query="insert into doctor (name, email, mode, password) values('$name','$email', '$mode','$password')";
        $run=mysqli_query($con, $query);
        if($run){
            header("Location:../add_doctor.php?doctor_added");
        }
    }
}
?>
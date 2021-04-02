<?php
session_start();
include_once("../../config.php");

if(isset($_POST["login"])){
    $email=$_POST["email"];
    $password=$_POST["password"];

    $query="select * from doctor where email='".$email."' and password='".$password."'";
    $run=mysqli_query($con, $query);
    if(mysqli_num_rows($run) == 1){
       $_SESSION["doctor"]= $email;
        header("Location:../doctor_dashboard.php");
    }
}
?>
<?php
include_once("../config.php");

if(isset($_POST["fix"])){
    $pname=$_POST["pname"];
    $adate=$_POST["adate"];
    $atime=$_POST["atime"];
    $pphone=$_POST["pphone"];
    $rehab=$_POST["rehab"];
    $doctor=$_POST["doctor"];

    $sql="insert into appoinment (pname, date, time, phone, rehab, doctor) values ('$pname', '$adate', '$atime', '$pphone', '$rehab', '$doctor')";
    $run=mysqli_query($con,$sql);
    if($run){
        header("Location:../appoinment.php?success");
    }
}
?>
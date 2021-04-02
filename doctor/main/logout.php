<?php
    session_start();
    
    if(isset($_SESSION["doctor"])){
        session_unset();
        session_destroy();
    }
    header("Location:../index.html");
?>
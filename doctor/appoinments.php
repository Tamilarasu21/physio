<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Bootstrap CSS dont change -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <!-- Write code below -->
    <!-- header start -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <a class="navbar-brand" href="#"><img src="../assets/physio.jpg" alt="logo" width="35" height="35" border="1" style="left: 0" class="img-circle" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION["doctor"]; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right text-right rounded-0" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Change Password</a>
                            <a class="dropdown-item" href="main/logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- header ends -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="text-center text-danger">My Appoinments</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Patient Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Phone</th>
                                <th>Rehabitalization</th>
                                <th>Doctor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("../config.php");
                            $sq=mysqli_query($con, "select * from doctor where email='".$_SESSION["doctor"]."'");
                            while($row=mysqli_fetch_assoc($sq)){
                                $name=$row["name"];
                            }
                            $sql = "select * from appoinment where doctor='".$name."' order by id desc";
                            $run = mysqli_query($con, $sql);
                            $f = 1;
                            foreach ($run as $app) {
                                $rehab = $app["rehab"] == 0 ? "Yes" : "No";
                                echo '<tr><td>' . $f . '</td><td>' . $app["pname"] . '</td><td>' . date("d-m-Y", strtotime($app["date"])) . '</td><td>' . date("g:iA", strtotime($app["time"])) . '</td><td>' . $app["phone"] . '</td><td>' . $rehab . '</td><td>' . $app["doctor"] . '</td></tr>';
                                $f++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <a href="doctor_dashboard.php" class="text-center">Back to Home</a>
                </div>
            </div>
        </div>
    </main>
    <!-- write code above -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS  dont change -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
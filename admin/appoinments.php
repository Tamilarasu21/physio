<?php
session_start();
include_once("../config.php");
if (!isset($_SESSION["admin"])) {
    header("Location:index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinments</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
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
                            <?php echo $_SESSION["admin"]; ?>
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
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Hospital</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Home</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <h3 class="text-center text-danger">Hospital Appoinments</h3>
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
                                    $sql = "select * from appoinment where mode='hospital' order by id desc";
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
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <h3 class="text-center text-danger">Home Appoinments</h3>
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
                                    $sql = "select * from appoinment where mode='home' order by id desc";
                                    $run = mysqli_query($con, $sql);
                                    $i = 1;
                                    foreach ($run as $app) {
                                        $rehab = $app["rehab"] == 0 ? "Yes" : "No";
                                        echo '<tr><td>' . $i . '</td><td>' . $app["pname"] . '</td><td>' . date("d-m-Y", strtotime($app["date"])) . '</td><td>' . date("g:iA", strtotime($app["time"])) . '</td><td>' . $app["phone"] . '</td><td>' . $rehab . '</td><td>' . $app["doctor"] . '</td></tr>';
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="admin_dashboard.php" class="text-center">Back to Home</a>
                </div>
            </div>
        </div>
        <!-- <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <h3 class="text-center text-danger">Appoinments</h3>
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
                            $sql = "select * from appoinment order by id desc";
                            $run = mysqli_query($con, $sql);
                            $i = 1;
                            foreach ($run as $app) {
                                echo '<tr><td>' . $i . '</td><td>' . $app["pname"] . '</td><td>' . date("d-m-Y", strtotime($app["date"])) . '</td><td>' . date("g:iA", strtotime($app["time"])) . '</td><td>' . $app["phone"] . '</td><td>' . $app["rehab"] . '</td><td>' . $app["doctor"] . '</td></tr>';
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
    </main>
    <!-- write code above -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS  dont change -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
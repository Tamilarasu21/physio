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
  <div class="container">
    <div class="row mb-3">
      <div class="col-xl-6 col-lg-6">
        <div class="card card-inverse card-success m-1">
          <div class="card-block bg-success p-2">
            <a href="appoinments.php" class="text-decoration-none text-white">
              <div class="rotate">
                <i class="fa fa-user-md fa-5x"></i>
              </div>
              <h6 class="text-uppercase text-light">My Appoinments</h6>
              <h1 class="display-1 text-light">
                <?php
                include_once("../config.php");
                $sq = mysqli_query($con, "select * from doctor where email='" . $_SESSION["doctor"] . "'");
                while ($row = mysqli_fetch_assoc($sq)) {
                  $name = $row["name"];
                }
                $doc_l = mysqli_query($con, "select * from appoinment where doctor='".$name."'");
                $c_doc = mysqli_num_rows($doc_l);
                echo $c_doc;
                ?>
              </h1>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6">
        <div class="card card-inverse card-danger m-1">
          <div class="card-block bg-danger p-2">
            <div class="rotate">
              <i class="fa fa-list-alt fa-4x"></i>
            </div>
            <h6 class="text-uppercase text-light">My Patients</h6>
            <h1 class="display-1 text-light"><?php
                include_once("../config.php");
                $sq = mysqli_query($con, "select * from doctor where email='" . $_SESSION["doctor"] . "'");
                while ($row = mysqli_fetch_assoc($sq)) {
                  $name = $row["name"];
                }
                $doc_l = mysqli_query($con, "select * from appoinment where doctor='".$name."'");
                $c_doc = mysqli_num_rows($doc_l);
                echo $c_doc;
                ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- write code above -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS  dont change -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
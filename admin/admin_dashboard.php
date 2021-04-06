<?php
session_start();
include_once("../config.php");
?>
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
      <a class="navbar-brand" href="#">PHYSIO</a>
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
  <!-- header ends -->
  <div class="container mt-3">
    <div class="row mb-3">
      <div class="col-xl-3 col-lg-6">
        <div class="card card-inverse card-success m-1">
          <div class="card-block bg-success p-2">
            <a href="doctors.php" class="text-decoration-none text-white">
              <div class="rotate">
                <i class="fa fa-user-md fa-5x"></i>
              </div>
              <h6 class="text-uppercase text-light">Doctors</h6>
              <h1 class="display-1 text-light">
                <?php
                $doc_l = mysqli_query($con, "select * from doctor");
                $c_doc = mysqli_num_rows($doc_l);
                echo $c_doc;
                ?>
              </h1>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-inverse card-danger m-1">
          <div class="card-block bg-danger p-2">
            <div class="rotate">
              <i class="fa fa-list-alt fa-4x"></i>
            </div>
            <h6 class="text-uppercase text-light">Patients</h6>
            <h1 class="display-1 text-light">87</h1>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-inverse card-info m-1">
          <div class="card-block bg-info p-2">
            <a href="appoinments.php" class="text-decoration-none text-white">
              <div class="rotate">
                <i class="fa fa-stethoscope fa-5x"></i>
              </div>
              <h6 class="text-uppercase text-light">Appoinments</h6>
              <h1 class="display-1 text-light">
                <?php
                $app_l = mysqli_query($con, "select * from appoinment");
                $c_app = mysqli_num_rows($app_l);
                echo $c_app;
                ?>
              </h1>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card card-inverse card-warning m-1">
          <div class="card-block bg-warning p-2">
            <div class="rotate">
              <i class="fa fa-thumbs-up fa-5x"></i>
            </div>
            <h6 class="text-uppercase text-light">Rehabilitations</h6>
            <h1 class="display-1 text-light">36</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <img src="PHYISO.jpeg" alt="logo" width="80" height="80" border="1" style="left:0" class="img-circle">
        <div class="p-3 mb-2 bg-white text-black float-right">
          <i class="fa fa-phone"></i>&nbsp;<a href="tel:9442655664">9442655664</a><br>
          <i class="fa fa-envelope"></i>&nbsp;<a href="mailto:venkateshsru@gmail.com">venkateshsru@gmail.com</a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <ul class="list-unstyled">
            <li class="m-2"><a href="add_doctor.php" class="btn btn-danger">Add Doctor</a></li>

            <li class="m-2"><input class="btn btn-danger" type="button" name="" value="Doctor"></li>

            <li class="m-2"><input class="btn btn-danger" type="button" name="" value="Patient_info"></li>

            <li class="m-2"><input class="btn btn-danger" type="button" name="" value="Appointment"></li>

            <li class="m-2"><input class="btn btn-danger" type="button" name="" value="Rehabitalitation"></li>

            <li class="m-2"><input class="btn btn-danger" type="button" name="" value="About"></li>
          </ul>
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
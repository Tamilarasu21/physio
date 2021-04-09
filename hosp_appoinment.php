<html>

<head>
    <title>Appointment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <!-- header start -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="assets/physio.jpg" alt="logo" width="35" height="35" border="1" style="left: 0" class="img-circle" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link text-white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link text-white">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="appoinment.php" class="nav-link text-white">Appoinment</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link text-white">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- header ends -->
    <main class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card border border-1">
                    <div class="card-header bg-danger text-light text-center">
                        Hospital Appoinment
                    </div>
                    <div class="card-body">
                        <form action="main/hosp_app_process.php" method="post">
                            <div class="form-group row">
                                <label for="pname" class="col-4">Patient name</label>
                                <input type="text" id="pname" name="pname" class="col-8 form-control">
                            </div>
                            <div class="form-group row">
                                <label for="adate" class="col-4">Date</label>
                                <input type="date" id="adate" name="adate" class="col-8 form-control">
                            </div>
                            <div class="form-group row">
                                <label for="atime" class="col-4">Time</label>
                                <input type="time" id="atime" name="atime" class="col-8 form-control">
                            </div>
                            <div class="form-group row">
                                <label for="pphone" class="col-4">Phone</label>
                                <input type="tel" inputmode="numeric" id="pphone" name="pphone" class="col-8 form-control">
                            </div>
                            <div class="form-group row">
                                <div class="col-4">Rehabitalization </div>
                                <div class="col-8"><input type="checkbox" id="rehab" name="rehab" value="1">&emsp;<label for="rehab" text-white>Check this if you need</label></div>
                            </div>
                            <div class="form-group row">
                                <label for="doc" class="col-6">Available Doctor </label>
                                <div class="col-6">
                                    <?php
                                    include_once("config.php");
                                    $sql = "select distinct name from doctor where mode='hospital'";
                                    $run = mysqli_query($con, $sql);
                                    $i = 1;
                                    foreach ($run as $doc) {
                                    ?>
                                        <input type="radio" id="<?php echo $i; ?>" name="doctor" value="<?php echo $doc["name"]; ?>">
                                        <label for="<?php echo $i; ?>"><?php echo $doc["name"]; ?></label><br>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center"><button type="submit" class="btn btn-danger text-center" name="fix">Fix Appoinment</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main><br><br>

    <!-- jQuery first, then Popper.js, then Bootstrap JS  dont change -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
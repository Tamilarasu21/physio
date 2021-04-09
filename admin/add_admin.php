<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font awesome CSS dont change -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <a class="navbar-brand" href="#"><img src="../assets/physio.jpg" alt="logo" width="35" height="35" border="1" style="left: 0" class="img-circle" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $_SESSION["admin"]; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right text-right rounded-0"
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="main/logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-5 text-center">
                <div class="card">
                    <div class="card-header bg-danger text-light">
                        <h5 class="text-center">Add Admin</h5>
                    </div>
                    <div class="card-body">
                        <form action="main/add_admin.php" method="POST">
                            <div class="form-group"><input type="text" name="aname" class="form-control"
                                    placeholder="Admin Name"></div>
                            <div class="form-group"><input type="email" name="aemail" class="form-control"
                                    placeholder="Admin Email"></div>
                            <div class="form-group"><input type="password" name="apass" class="form-control"
                                    placeholder="Password"></div>
                            <div class="form-group"><input type="password" name="acpass" class="form-control"
                                placeholder="Confirm Password"></div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center"><input type="submit" value="Add Admin" name="aadd"
                                class="btn btn-danger"></div>
                        </form>
                    </div>
                </div>
                <a href="admin_dashboard.php">Back to Home</a>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS  dont change -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
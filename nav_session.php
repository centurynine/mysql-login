<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="nav-placeholder">
    <nav class="navbar navbar-expand-lg navbar-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" class="nav-img" style="width:10%" alt=""></a>
            <div class="collapse navbar-collapse" id="leadUIMainNav">
                <div class="navbar-margin">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info.php">Info</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Edituser
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="edituser.php">Info</a></li>
                            <li><a class="dropdown-item" href="edituser.php">Authentication</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-rounded btn-danger m-md-1">Logout</a>
                    </li>
                </ul>
            </div>
         </div>
        </div>
        
    </nav> <div class="hr" ></div>

</div>
</body>

<script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>
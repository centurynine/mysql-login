<?php 
    session_start();
    include_once('function.php');
    $userdata = new DB_con();

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $result = $userdata->signin($username,$password);
        $num = mysqli_fetch_array($result);
        if($num > 0){
            $_SESSION['id'] = $num['id'];
            $_SESSION['name'] = $num['name'];
            echo "<script>alert('Login Successful');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
        else {
            echo "<script>alert('Failed');</script>";
            echo "<script>window.location.href='login.php'</script>";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="alert/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f0d5a6a222.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <?php 
    if(isset($_SESSION['id'])){
        if($_SESSION['id'] != ""){
            header("location:index.php");
    }
    else{
        echo '<div id="nav-placeholder"></div>';
    }
}
else{
    echo '<div id="nav-placeholder"></div>';
}
    ?>
 
    <form method="post">
    <section class="login">
        <div class="p-5"></div>
        <div class="container">
            <div class="row">
                <div class="col left-card">
                    <div class="container-left">
                    </div>
                    <style>
                        .left-card {
                            background-image: url("assets/images/password.png");
                            background-size: fill;
                            background-position: center;
                            background-repeat: no-repeat;
                            object-fit: contain;
                            padding-inline: 30px;
                            height: 800px;
                            width: 45%;
                            background-color: #3f3f3f;;
                            border-top-left-radius: 20px;
                            border-bottom-left-radius: 20px;
                        }
                    </style>

                </div>
                <div class="col right-card">
                <div class="container-right">
                    <style>
                        .right-card {
                            background-color: #F5F5F5;
                            border-top-right-radius: 20px;
                            border-bottom-right-radius: 20px;
                        }
                    </style>
                    </div>
                    <div class="p-md-4"></div>
                    <div class="text-center p-5">
                        <h1>Login</h1>
                    </div>
                    <div class="input-group mb-3">
                        <i class="fa solid fa-user"></i>
                        <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username">
                        
                    </div>
                    <span id="usernameavailable"></span>
                    <div class="input-group mb-3">
                        <i class="fa solid fa-lock"></i>
                        <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Password">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block btn-center-login">
                        Login
                    </button>
                   
                </div>
            </div>

        </div>
    </section>
    </form>
</body>

<script src="//code.jquery.com/jquery.min.js"></script>

<script>
    $.get("nav.html", function(data) {
        $("#nav-placeholder").replaceWith(data);
    });
</script>
<script>
    $.get("nav_session.php", function(data) {
        $("#nav-placeholder-session").replaceWith(data);
    });
</script>

<script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
$(window).on('load', function () {
    $(".loader-wrapper").fadeOut("slow");
});
</script>




</html>
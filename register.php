<?php

    include_once('function.php');
    $userdata = new DB_con();

    if(isset($_POST['submit'])) {
    
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $name = $_POST['name'];
        $email = $_POST['email'];
    
        $sql = $userdata->register($username,$password,$name,$email);
        if($sql) {
            echo "<script>alert('Registration Successful');</script>";
            echo "<script>window.location.href='login.php'</script>";
        } else {
            echo "<script>alert('Registration Failed');</script>";
            echo "<script>window.location.href='register.php'</script>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f0d5a6a222.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="nav-placeholder"></div>
    <section class="login">
        <div class="p-5"></div>
        <div class="container">
            <div class="row">
                <div class="col left-card">
                    <style>
                        .left-card {
                            background-image: url("assets/images/password.png");
                            background-size: fill;
                            background-position: center;
                            background-repeat: no-repeat;
                            height: 800px;
                            width: 45%;
                            background-color: #3f3f3f;
                            ;
                            border-top-left-radius: 20px;
                            border-bottom-left-radius: 20px;
 
                        }
                    </style>

                </div>
                <div class="col right-card">
                    <style>
                        .right-card {
                            background-color: #F5F5F5;
                            border-top-right-radius: 20px;
                            border-bottom-right-radius: 20px;
                        }
                    </style>

                    <div class="p-md-4"></div>
                    <div class="text-center p-5">
                        <h1>Login</h1>
                    </div>
                    <form method="post">
                    <div class="input-group mb-3">
                    <i class="fa solid fa-inbox"></i>
                        <input name="name" type="text" class="form-control" placeholder="Name" aria-label="name">
                    </div>

                    <div class="input-group mb-3">
                       <i class="fa solid fa-envelope"></i>
                        <input name="email" type="email" class="form-control" placeholder="Email" aria-label="email">
                    </div>

                    <div class="input-group mb-3">
                        <i class="fa solid fa-user"></i>
                        <input name="username" type="text" class="form-control" placeholder="Username" aria-label="username" onblur="checkusername(this.value)">
                        
                    </div>
                    <div class="input-group mb-3">
                        <i class="fa solid fa-lock"></i>
                        <input name="password" type="password" class="form-control" placeholder="Password" aria-label="password">
                    </div>

                    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg btn-block btn-center-login">
                        Register 
                    </button>
                    <div class="text-center">
                        <span id="usernameavailable"></span>
                </div>
                </div>
            </div>
            </form>
        </div>
    </section>
    <div class="p-5"></div>
</body>


<script sec="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    function checkusername(val) {
        $.ajax({
            type: "POST",
            url: "checkusername.php",
            data: 'username=' + val,
            success: function(data) {
                $("#usernameavailable").html(data);
            }
        });
    }
      
    </script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script>
    $.get("nav.html", function(data) {
        $("#nav-placeholder").replaceWith(data);
    });
</script>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
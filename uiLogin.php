<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style-form-login.scss">
</head>
<body>
    

    <div class="container-form">
        <div class="login-left">
            <div class="login-header">
                <h1>Welcome</h1>
                <p>Please login to access my resource</p>
            </div>
            <form class="login-form">
                <div class="container-form">
                <div class="login-form-content">
                    <div class="form-item">
                        <label for="username">Username</label>
                        <input type=text id="username">
                    </div>
                    <div class="form-item">
                        <label for="password">Password</label>
                        <input type=text id="password">
                    </div>
                    <div class="form-item">
                        <input class="checkbox" type="checkbox" id="remember" name="remember">
                        <label for="remember" id="checkboxLabel">Remember me</label>
                    </div>
                    <div class="form-item-btn">
                        <button class="submit-btn" type="submit">Login</button>
                    </div>
                </div>
                 <div class="login-form-footer">
                    <a href="#">
                        <img width="30" src="assets/images/facebook.png" alt=""> Facebook Login
                    </a>
                    <a href="#">
                    <img width="30" src="assets/images/google.png" alt=""> Google Login
                    </a>
                 </div>
                 </div>
            </form>
        </div>
        <div class="login-right">
            <img class="img" src="assets/images/login-bg.jpg" alt="">
        </div>
    </div>


</body>
</html>
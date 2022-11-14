<?php

session_start();
    if ($_SESSION['id'] != "") {
        echo "<script>console.log('User is logged in!');</script>";
    } else {
        header("Location: login.php");
    }

    if(isset($_POST['submit'])){
        include_once('function.php');
        $changedata = new DB_con;
        $id = $_SESSION['id'];
        $name= $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        if(is_null($name)||is_null($email)||is_null($username)){
            echo "<script>alert('Please fill in all fields!');</script>";
        } else{
            $sql = $changedata->editUser($id,$name,$email,$username);
            if($sql){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $username;
                echo "<script>alert('User data updated successfully!');</script>";
                echo "<script>window.location.href='edituser.php'</script>";
            } else {
                echo "<script>alert('Something went wrong! Please try again!');</script>";
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-edit.css">
</head>

<body>

    <?php

    if (isset($_SESSION['id'])) {
        if ($_SESSION['id'] != "") {
            echo '<div id="nav-placeholder-session"></div>';
        } else {
            echo '<div id="nav-placeholder"></div>';
        }
    } else {
        echo '<div id="nav-placeholder"></div>';
    }
    ?>
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <div class="text-md-center">
        <h1 class="mt-5">Welcome : <?php echo $_SESSION['name']; ?> to Edit user page!
        </h1>
    </div>
<form method="post">
    <div class="container-form">
        <div class="form-edit">
          <div class="form-item">
                  <label for="username">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" value="<?php echo $_SESSION['name']; ?>">
            </div>
            <div class="form-item">
                  <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" value="<?php echo $_SESSION['username']; ?>">
            </div>
            <div class="form-item">
                 <label for="username">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <div class="form-item">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button></div>
         </div>
            
    </div>
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
<script>
    $(window).on('load', function() {
        $(".loader-wrapper").fadeOut("slow");
    });
</script>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>
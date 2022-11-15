<?php

session_start();
    if ($_SESSION['id'] != "") {
        echo "<script>console.log('User is logged in!');</script>";
    } else {
        header("Location: login.php");
    }

    if(isset($_POST['submit'])){
        if(isset($_COOKIE['changeEmail'])){
        include_once('function.php');
        $changedata = new DB_con;
        $id = $_SESSION['id'];
        $name= $_POST['name'];
        $email = $_COOKIE['changeEmail'];
        $username = $_POST['username'];
        $ruleEdit = $_SESSION['ruleEdit'];
        if($ruleEdit == 'true'){
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
    } else {
        echo "<script>alert('Please check your email!');</script>";
    }
    }
}
else {
     
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

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
        <h1 class="mt-5">แก้ไขข้อมูลผู้ใช้ : <?php echo $_SESSION['name']; ?>
        </h1>
    </div>
<form method="post">
    <div class="container-form">
        <div class="form-edit">
          <div class="form-item">
                  <label for="name"><i class="bi-file-person">  </i></i></i>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" id="name" name="name" placeholder="Name" value="<?php echo $_SESSION['name']; ?>">
            </div>
            <div class="form-item">
                  <label for="username"><i class="bi-person-fill">  </i>Username</label>
                <input type="text" id="username" name="username" placeholder="Username" value="<?php echo $_SESSION['username']; ?>">
            </div>
            <div class="form-item">
                 <label for="email"><i class="bi-envelope-fill"></i>  </i>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="email" id="email" name="email" aria-label="email" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" onblur="checkemail(this.value)">
                <span id="emailavailable"></span>
            </div>
            <div class="form-item">
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button></div>
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

<script>
    function checkemail(val) {
        $.ajax({
            type: "POST",
            url: "checkemail.php",
            data: 'email=' + val,
            success: function(data) {
                $("#emailavailable").html(data);
            }
        });
    }
    </script>

</html>
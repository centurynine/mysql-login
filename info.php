<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" href="alert/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f0d5a6a222.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['id'] != "") {
    } else {
        header("location:login.php");
    }
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
    <script>
        $(function() {
            $("#nav-placeholder").load("nav-session.php");
        });
    </script>
    <div class="text-md-center">

        <h1 class="mt-5">Welcome : <?php echo $_SESSION['name']; ?>
        </h1>

        <!-- <h1>Welcome ... <?php echo $_SESSION['name']; ?></h1> -->
    </div>

    <div class="row row-center">
    <?php
    include_once('function.php');
    $info = new DB_con();
    $result = $info->information(40);
    while ($record = mysqli_fetch_array($result)) {
    ?>
      <div class="card card-padding ">
        <img class="card-img-top card-image" src="<?php echo $record['coverimage']; ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-md-center"><?php echo $record['name']; ?></h5>
          <p class="card-text text-md-center"><?php echo $record['detail'] ?></p>
          <div class="row justify-content-center">
          <a class="btn btn-primary"" target="_blank" href="http://maps.google.com/maps?q=<?php echo $record['latitude'] ?>,<?php echo $record['longitude'] ?>">Projects</a>
          </div>
        </div>
      </div>
    <?php }
    ?>
</div>

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

</html>
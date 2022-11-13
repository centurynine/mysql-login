<?php


  session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
<?php 
    if(isset($_SESSION['id'])){
        if($_SESSION['id'] != ""){
            echo '<div id="nav-placeholder-session"></div>';
        }
        else{
            echo '<div id="nav-placeholder"></div>';
        }
    }
    else{
        echo '<div id="nav-placeholder"></div>';
    }
    ?>
    <div class="row row-center">
     <div class="card card-padding">
        <img class="card-img-top card-image" src="assets/images/flutter.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-md-center">Flutter</h5>
          <p class="card-text text-md-center">Mobile Application</p>
          <br>
          <div class="row justify-content-center">
            <a class="btn btn-primary"" href="flutter-page.php">Projects</a>
          </div>
        </div>
      </div>
      <div class="card card-padding ">
        <img class="card-img-top card-image" src="assets/images/python.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-md-center">Python</h5>
          <p class="card-text text-md-center">Python Programming Language</p>
          <div class="row justify-content-center">
          <a class="btn btn-primary"" href="#">Projects</a>
            <div class="overlay">
              <div class="text">Hello World</div>
            </div>
          </div>
        </div>
      </div>
      <div class="card card-padding ">
        <img class="card-img-top card-image" src="assets/images/iot.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-md-center">IoT</h5>
          <p class="card-text text-md-center">Internet of Things <br>( Arduino,ESP8266 )</p>
          <div class="row justify-content-center">
          <a class="btn btn-primary"" href="#">Projects</a>
          </div>
        </div>
      </div>
      
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
$(window).on('load', function () {
    $(".loader-wrapper").fadeOut("slow");
});
</script>
<script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flutter</title>
</head>
<body>
<?php 
    session_start();
    if($_SESSION['id'] != ""){
        
    }
    else{
        header("location:login.php");
    }
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
    <div class="loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <script>
        $(function(){
            $("#nav-placeholder").load("nav-session.php");
        });
    </script>
    <div class="text-md-center">

        <h1 class="mt-5">Welcome : <?php echo $_SESSION['name']; ?> 
        </h1>

        <!-- <h1>Welcome ... <?php echo $_SESSION['name']; ?></h1> -->
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
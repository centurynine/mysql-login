<?php 
    session_start();
    $cookie_email = "changeEmail";
    $_SESSION['ruleEdit'] = "false";
    include_once('function.php');
    $emailcheck = new DB_con();
    $email = $_POST['email'];
    $sql = $emailcheck->emailCheck($email);
    $num = mysqli_num_rows($sql);
    if($num > 0){
        $_SESSION['ruleEdit'] = "false";
        echo "<br>Email $email already exists";
        echo "<script>$('#submit').prop('disabled',true);</script>";
            if($_SESSION['email'] == $email){
                echo " *คุณเป็นเจ้าของอีเมลนี้";
                echo "<script>$('#submit').prop('disabled',false);</script>";
                $_SESSION['ruleEdit'] = "true";
                setcookie($cookie_email, $email, time() + 100);
            }
    }
    else{
        echo "<br>Email $email available";
        echo "<script>$('#submit').prop('disabled',false);</script>";
        $_SESSION['ruleEdit'] = "true";
        setcookie($cookie_email, $email, time() + 100);
    }
?>
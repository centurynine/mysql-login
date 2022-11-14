<?php 
    session_start();
    include_once('function.php');
    $emailcheck = new DB_con();
    $email = $_POST['email'];
    $sql = $emailcheck->emailCheck($email);
    $emailRow = mysqli_fetch_array($sql);
    $mail = $emailRow['email'];
    if($emailRow > 0){
        echo "<span style='color:red'Email $mail aleardy exist</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    }
    else{
        echo "<span style='color:red'Email $mail can use</span>";
        echo "<script>$('#submit').prop('disabled',true);</script>";
    }
?>
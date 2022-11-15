<?php

    session_start();
    session_destroy();
    setcookie('changeEmail' , null);
    header("location:login.php");


?>
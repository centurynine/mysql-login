<?php
    $cookie_user = "user"; // ค่าที่เก็บ [Name] => Value
    $cookie_pass = "passss";
    setcookie('user', $cookie_user, time() + 30); // 86400 = 1 day
    setcookie('pass', $cookie_pass, time() + 10); // 86400 = 1 day

    echo "สร้างตัวแปร Cookie แล้ว $cookie_user, $cookie_pass";

?>
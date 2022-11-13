<?php
    $cookie_user = "Zen"; // ค่าที่เก็บ [Name] => Value
    $cookie_pass = "thePassword";
    setcookie('User', $cookie_user, time() + 40); // 86400 = 1 day
    setcookie('Password', $cookie_pass, time() + 40); // 86400 = 1 day

    echo "สร้างตัวแปร Cookie แล้ว $cookie_user, $cookie_pass";

?>
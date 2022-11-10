<?php


    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'login_project');

    class DB_con {
        function __construct(){
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
 
        }


        public function usernameavailable($username) {
            $checkuser = mysqli_query($this->dbcon, "SELECT username FROM users WHERE username = '$username'");
            return $checkuser;
        }

        public function register($username,$password,$name,$email){
            $reg = mysqli_query($this->dbcon, "INSERT INTO users(username,password,name,email)
             VALUES('$username','$password','$name','$email')");
            return $reg;
        }

        public function signin($username,$password){
            $signin = mysqli_query($this->dbcon, "SELECT * FROM users WHERE username = '$username' and password = '$password'");
            return $signin;
        }

    }


?>
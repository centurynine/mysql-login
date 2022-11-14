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
            if($username != "" && $password != "" && $name != "" && $email != ""){
                $checkuser = mysqli_query($this->dbcon, "SELECT username FROM users WHERE username = '$username'");
                $count = mysqli_num_rows($checkuser);
                if($count == 0){
                    $register = mysqli_query($this->dbcon, "INSERT INTO users(username,password,name,email) VALUES('$username','$password','$name','$email')");
                    return $register;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }

        public function signin($username,$password){
            $signin = mysqli_query($this->dbcon, "SELECT * FROM users WHERE username = '$username' and password = '$password'");
            return $signin;
        }

        public function information($data){
            $information = mysqli_query($this->dbcon, "SELECT id, name, detail, coverimage, latitude, longitude FROM attractions LIMIT 0,$data");
            return $information;
        }

        public function editUser($id,$name,$email,$username){
            if($id == "" || $name == "" || $email == "" || $username == "" || empty($id) || empty($name) || empty($email) || empty($username) || count(explode(' ', $username)) > 1 || count(explode(' ', $email)) > 1){
                return false;
            }
            else{
                $edituser = mysqli_query($this->dbcon, "UPDATE users SET name = '$name', email = '$email', username = '$username' WHERE id = '$id'");
                return $edituser;
            }
        }

        public function emailavailable($email) {
            $checkemail = mysqli_query($this->dbcon, "SELECT email FROM users WHERE email = '$email'");
            if($checkemail){
                    return $checkemail;
            }
            else{
                return false;
            }
        }

        public function emailCheck($email){
            $email = mysqli_query($this->dbcon, "SELECT email FROM users WHERE email = '$email'");
            
            return $email;
        }

    }


?>
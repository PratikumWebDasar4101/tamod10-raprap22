<?php
    class data{
        private $conn;

        public function __construct(){
            $server="localhost";
            $user="root";
            $pass="";
            $db="modul8";
            $this->conn=mysqli_connect($server,$user,$pass,$db);
        }

        public function register($user, $pass, $confirm){
            if ($confirm == $pass) {
                $sql = "INSERT INTO login(username,password) VALUES ('$user',md5('$pass'))";
                mysqli_query($this->conn,$sql);
                ?>
                <script>
                    alert("Registrasi Berhasil");
                    location="index.php";
                </script>
                <?php
            }
            else{
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
        public function login($user, $pass){
            session_start();
            
            $sql = mysqli_query($this->conn, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')");
            $row = mysqli_fetch_assoc($sql);
            if ($sql) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['user'] = $user;
                $_SESSION['login'] = "sudah";
                header("location: user/index.php");
            }else{
                ?>
                <script>
                    alert("Login gagal");
                    location="index.php";
                </script>
                <?php
            }
        }
    }
    $data = new data();
    if (isset($_GET['login'])) {
        $data -> login($_POST['user'], $_POST['pass']);
    }
    if (isset($_GET['register'])) {
        $data->register($_POST['user'], $_POST['pass'], $_POST['confirmpass']);
    }
?>
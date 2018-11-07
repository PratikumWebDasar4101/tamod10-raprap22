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

        public function tambahdata($nd, $nb, $nim, $kelas, $hobi, $genre, $wisata, $tanggal, $email){
            $list_hobi = implode(", ",$hobi);
            $list_genre = implode(", ",$genre);
            $list_wisata = implode(", ",$wisata);
    
            $sql = "INSERT INTO jurnal(namadepan,namabelakang,nim,kelas,hobi,genre,wisata,tanggal,email) VALUES ('$nd','$nb','$nim','$kelas','$list_hobi','$list_genre','$list_wisata','$tanggal','$email')";
            if ( mysqli_query($this->conn,$sql)) {
                ?>
                <script>
                    alert("Data Berhasil Ditambah");
                    location="index.php";
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Data gagal Ditambah");
                    location="index.php?halaman=TambahData";
                </script>
                <?php
            }
        }

        public function editdata($namadepan, $namabelakang, $nim, $kelas, $hobi, $genre, $wisata, $tanggal, $email){
            $list_hobi = implode(", ",$hobi);
            $list_genre = implode(", ",$genre);
            $list_wisata = implode(", ",$wisata);
    
            $sql = "UPDATE jurnal SET namadepan ='$namadepan',namabelakang ='$namabelakang',kelas ='$kelas',hobi ='$list_hobi',genre ='$list_genre',wisata ='$list_wisata',tanggal ='$tanggal',email ='$email' WHERE nim ='$nim'";
            if ( mysqli_query($this->conn,$sql)) {
                ?>
                <script>
                    alert("Data Berhasil Diubah");
                    location="index.php";
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Data gagal Diubah");
                    location="index.php";
                </script>
                <?php
            }
        }

        public function delete($nim){
            $sql = mysqli_query($this->conn, "DELETE FROM jurnal WHERE nim = '$nim'");
            if ($sql) {
                ?>
                <script>
                    alert("Data berhasil dihapus");
                    location = "index.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Data gagal dihapus");
                    location = "index.php";
                </script>
                <?php
            }
        }

        public function edit_profile($id, $passlama, $passbaru, $confirmpass){
            $sql = mysqli_query($this->conn, "SELECT * FROM login WHERE id = '$id'");
            $row = mysqli_fetch_assoc($sql);

            if (md5($passlama) == $row['password']) {
                if ($passbaru == $confirmpass) {
                    $query = mysqli_query($this->conn, "UPDATE login SET password = md5('$passbaru')");

                    if ($query) {
                        ?>
                        <script>
                            alert("Profile berhasil diperbaharui");
                            location = "index.php";
                        </script>
                        <?php
                    } else {
                        ?>
                        <script>
                            alert("Profile gagal diperbaharui");
                            location = "index.php?halaman=EditProfile";
                        </script>
                        <?php
                    }
                } else {
                    ?>
                    <script>
                        alert("Konfirmasi password tidak sama dengan password");
                        location = "index.php?halaman=EditProfile";
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    alert("Password lama tidak sama");
                    location = "index.php?halaman=EditProfile";
                </script>
                <?php
            }
        }

        public function tampil_data($nim){
            $sql = mysqli_query($this->conn, "SELECT * FROM jurnal WHERE nim = '$nim'");
            return $sql;
        }

        public function tampil($cari){
            $sql = mysqli_query($this->conn, "SELECT * FROM jurnal WHERE nim LIKE '%$cari%'");
            return $sql;
        }
    }
    $data = new data();
    if (isset($_GET['tambah_data'])) {
        $data->tambahdata($_POST['namadepan'], $_POST['namabelakang'], $_POST['nim'], $_POST['kelas'], $_POST['hobi'], $_POST['genre'], $_POST['wisata'], $_POST['tanggal'], $_POST['email']);
    }
    if (isset($_GET['delete'])) {
        $data -> delete($_GET['delete']);
    }
    if (isset($_GET['edit_data'])) {
        $data->editdata($_POST['namadepan'], $_POST['namabelakang'], $_POST['nim'], $_POST['kelas'], $_POST['hobi'], $_POST['genre'], $_POST['wisata'], $_POST['tanggal'], $_POST['email']);
    }
    if (isset($_GET['edit_profile'])) {
        $data->edit_profile($_POST['id'], $_POST['passlama'], $_POST['passbaru'], $_POST['confirmpass']);
    }
?>
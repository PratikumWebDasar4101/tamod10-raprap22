<?php
    require("proses.php");
    $nim = $_GET['nim'];
    $result = $data -> tampil_data($nim);
    $row = mysqli_fetch_assoc($result);

    $hobi = explode(", ", $row['hobi']);
    $genre = explode(", ", $row['genre']);
    $wisata = explode(", ", $row['wisata']);
?>
<div class="container">
    <div class="row w-50 m-auto">
        <div class="col pt-3">
            <h1 class="text-center">Tambah Data</h1>
            <hr>
            <form method="post" action="proses.php?edit_data=mahasiswa">
                <div class="form-group">
                    <label for="inputNamaDepan">Nama Depan</label>
                    <input type="text" class="form-control" id="inputNamaDepan" name="namadepan" maxlength="25" pattern="[a-zA-Z]+" value="<?php echo $row['namadepan']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputnamabelakang">Nama Belakang</label>
                    <input id="inputnamabelakang" type="text" class="form-control" name="namabelakang"  maxlength="25" pattern="[a-zA-Z]+" value="<?php echo $row['namabelakang']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputnim">NIM</label>
                    <input type="text" id="inputnim" class="form-control" name="nim" pattern="\d*" minlength="10" maxlength="10" value="<?php echo $row['nim']; ?>">
                    </div>
                <div class="form-group">
                    <label for="inputkelas">Kelas</label>
                    <select name="kelas" class="form-control" id="inputkelas">
                        <option value="D3SI-41-01" <?php if( $row['kelas'] == "D3SI-41-01") { echo "selected"; } ?>>D3SI-41-01</option>
                        <option value="D3SI-41-02" <?php if( $row['kelas'] == "D3SI-41-02") { echo "selected"; } ?>>D3SI-41-02</option>
                        <option value="D3SI-41-03" <?php if( $row['kelas'] == "D3SI-41-03") { echo "selected"; } ?>>D3SI-41-03</option>
                        <option value="D3SI-41-04" <?php if( $row['kelas'] == "D3SI-41-04") { echo "selected"; } ?>>D3SI-41-04</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label class="col-3">Hobi</label>
                    <div class="form-check">
                        <input type="checkbox" id="checkMakan" name="hobi[]" value="Makan" <?php if(array_search("Makan", $hobi) > -1) { echo "checked"; } ?>>
                        <label for="checkMakan">Makan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="checkMain" name="hobi[]" value="Main" <?php if(array_search("Main", $hobi) > -1) { echo "checked"; } ?>>
                        <label for="checkMain">Main</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="checkTidur" name="hobi[]" value="Tidur" <?php if(array_search("Tidur", $hobi) > -1) { echo "checked"; } ?>>
                        <label for="checkTidur">Tidur</label>
                    </div>
                </div>
                <div class="form-group row">        
                    <label class="col-3">Genre Film</label>
                    <div class="form-check">
                        <input type="checkbox" id="cekHorror" name="genre[]" value="Horror" <?php if(array_search("Horror", $genre) > -1) { echo "checked"; } ?>>
                        <label for="cekHorror">Horror</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekAnime" name="genre[]" value="Anime" <?php if(array_search("Anime", $genre) > -1) { echo "checked"; } ?>>
                        <label for="cekAnime">Anime</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekAction" name="genre[]" value="Action" <?php if(array_search("Action", $genre) > -1) { echo "checked"; } ?>>
                        <label for="cekAction">Action</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekDrama" name="genre[]" value="Drama" <?php if(array_search("Drama", $genre) > -1) { echo "checked"; } ?>>
                        <label for="cekDrama">Drama</label>
                    </div>
                </div>
                <div class="form-group row">
                <label class="col-3">Tempat Wisata</label>
                    <div class="form-check">
                        <input type="checkbox" id="cekBali" name="wisata[]" value="Bali" <?php if(array_search("Bali", $wisata) > -1) { echo "checked"; } ?>>
                        <label for="cekBali">Bali</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekTanjungSelor" name="wisata[]" value="Tanjung Selor" <?php if(array_search("Tanjung Selor", $wisata) > -1) { echo "checked"; } ?>>
                        <label for="cekTanjungSelor">Tanjung Selor</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekJakarta" name="wisata[]" value="Jakarta" <?php if(array_search("Jakarta", $wisata) > -1) { echo "checked"; } ?>>
                        <label for="cekJakarta">Jakarta</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" id="cekLombok" name="wisata[]" value="Lombok" <?php if(array_search("Lombok", $wisata) > -1) { echo "checked"; } ?>>
                        <label for="cekLombok">Lombok</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTanggal">Tanggal Lahir</label>
                    <input type="date" id="inputTanggal" class="form-control" name="tanggal" value="<?php echo $row['tanggal']; ?>">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" id="inputEmail" class="form-control" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com" value="<?php echo $row['email']; ?>">
                </div>
                <center><input type="submit" class="btn btn-primary" name="submit" value="Submit"></center>
            </form>
        </div>
    </div>
</div>
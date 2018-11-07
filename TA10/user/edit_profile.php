<?php
    session_start();
?>
<div class="container">
    <div class="row w-25 m-auto">
        <div class="col pt-3">
            <h2 class="text-center">Profile</h2>
            <hr>
            <form action="proses.php?edit_profile=asu" method="POST">
                <div class="form-group">
                    <label for="inputId">ID</label>
                    <input type="text" name="id" id="inputId" class="form-control" value="<?php echo $_SESSION['id']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputUser">Username</label>
                    <input type="text" name="user" id="inputUser" class="form-control" value="<?php echo $_SESSION['user']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputPassLama">Password Lama</label>
                    <input type="password" class="form-control" name="passlama" id="inputPassLama">
                </div>
                <div class="form-group">
                    <label for="inputPassBaru">Password Baru</label>
                    <input type="password" class="form-control" name="passbaru" id="inputPassBaru">
                </div>
                <div class="form-group">
                    <label for="inputConfirmPass">Konfirmasi Password Baru</label>
                    <input type="password" class="form-control" name="confirmpass" id="inputConfirmPass">
                </div>
                <center><input type="submit" class="btn btn-primary" value="Ubah"></center>
            </form>
        </div>
    </div>
</div>
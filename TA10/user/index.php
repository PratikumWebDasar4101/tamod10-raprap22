<?php
    require("header.php");
    if (isset($_GET['halaman'])) {
        if ($_GET['halaman'] == "TambahData") {
            require("newdata.php");
        }
        if ($_GET['halaman'] == "EditData") {
            require("edit.php");
        }
        if ($_GET['halaman'] == "Profile") {
            require("profile.php");
        }
        if ($_GET['halaman'] == "EditProfile") {
            require("edit_profile.php");
        }
    } else {
        require("dashboard.php");
    }
    require("footer.php");
?>
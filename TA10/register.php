<link rel="stylesheet" type="text/css" href="css2.css">
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <center>
<link rel="stylesheet" type="text/css" href="css2.css">
<div class="vid-container">
  <video id="Video1" class="bgvid back" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
  </video>
  <div class="inner-container">
    <video id="Video2" class="bgvid inner" autoplay="false" muted="muted" preload="auto" loop>
      <source src="http://shortcodelic1.manuelmasiacsasi.netdna-cdn.com/themes/geode/wp-content/uploads/2014/04/milky-way-river-1280hd.mp4.mp4" type="video/mp4">
    </video>
    <div class="box">
    <form method="post" action="proses.php?register=registrasi">
      <h1>Register</h1>
      <input type="text" placeholder="Username" name="user" maxlength="20" required />
      <input type="password" placeholder="Password" name="pass" minlength="6"  required />
      <input type="password" placeholder="Konfirmasi Password" name="pass" minlength="6" required>
      <button> Register</button>
      <p>Sudah Punya Akun? <a href="index.php" style="text-decoration: none"><span> Login</span></p></a>
      </form>
    </div>
  </div>
</div>
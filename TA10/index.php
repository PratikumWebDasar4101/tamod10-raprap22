<?php
    session_start();
    if (isset($_SESSION['login'])) {
        header("location: user/dashboard.php");
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
        <form action="proses.php?login=asu" method="post">
      <h1>Login</h1>
      <input type="text" placeholder="Username" name="user" maxlength="20" required />
      <input type="text" placeholder="Password" name="pass" minlength="6"  required />
      <button> Login</button>
      </form>
      <p>Not a member? <a href="register.php" style="text-decoration: none"><span> Register</span></p></a>
    </div>
  </div>
</div>

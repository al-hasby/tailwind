<?php
session_start();

$host_db  = "localhost";
$user_db  ="root";
$pass_db  ="";
$nama_db  ="login-2";
$koneksi  = mysqli_connect($host_db, $user_db, $pass_db, $nama_db);

$err       ="";
$username  ="";
$ingataku  ="";

if(isset($_COOKIE ['cookie_username'])){
$cookie_username = $_COOKIE['cookie_username'];
$cookie_password =$_COOKIE['username'];

$sql1 = "SELCECT * FROM loginn where username= '$cookie_username'";
$q1   = mysqli_query($koneksi,$sql1);
$r1   = mysqli_fetch_array($q1);



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text"  name="username" value="<?php echo $username ?>" class="form-control" id="inputUser"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>
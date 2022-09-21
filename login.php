<?php
include_once "include/header.php";
$_SESSION['RAHUL'] = $_SERVER['HTTP_REFERER'];
// exit;
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body>
    <h1 align="center">Login</h1>
    <form action="models/login_proccess.php" method="post">
        Username Or Email : <input type="text" name="username" placeholder="Enter Your username or email" class="form-control">
        <br>
        Password : <input type="password" name="password" placeholder="Enter your Password" class="form-control">
        <br>
        <input type="submit" value="login" class="btn btn-primary"><br>
        <br>
        <p align="center">First time visit ? <a href="registor.php">Signup</a></p>
    </form>
</body>
<br>
<br>
<br>
<br>
<?php
include "include/footer.php";
?>
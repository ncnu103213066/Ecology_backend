<?php
include 'header.php';

//require("dbconnect.php");

//set the login mark to empty
$_SESSION['uID'] = 0;
?>
<div class="container">
<h1>Login Form</h1><hr />
<form method="post" action="../Control/LoginControl.php">
<input type="hidden" name="act" value="login">
User Name: <input type="text" name="id"><br />
Password : <input type="password" name="pwd"><br />
<input type="submit">
</form>
</div>

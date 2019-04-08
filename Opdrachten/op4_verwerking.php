<?php

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$dbcop4 = mysqli_connect('localhost', 'dbchallangeuser', 'bPe5qCeDm6KrJt', 'dbchallange') or die('Error connecting.');

if ($username == "" or $username == null) {
} else {
    $query = "UPDATE users SET username = '$username' WHERE user_id = '$user_id'";
    mysqli_query($dbcop4, $query) or die ('Error Updating username.');
}
if ($email == "" or $email == null) {
} else {
    $query = "UPDATE users SET email = '$email' WHERE user_id = '$user_id'";
    mysqli_query($dbcop4, $query) or die ('Error Updating email.');
}
if ($password == "" or $password == null) {
} else {
    $query = "UPDATE users SET password = '$password' WHERE user_id = '$user_id'";
    mysqli_query($dbcop4, $query) or die ('Error Updating password.');
}

?>
<a href="../index.php">Index</a><br>
<a href="op4.php">Terug naar gevens wijzigen</a>



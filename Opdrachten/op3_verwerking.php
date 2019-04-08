<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$dbcop3 = mysqli_connect('localhost', 'dbchallangeuser', 'bPe5qCeDm6KrJt', 'dbchallange') or die('Error connecting.');

$query = "SELECT username, email FROM users WHERE username = '$username' and email = '$email'";

$result = mysqli_query($dbcop3, $query) or die ('Error Checking.');

$number_of_rows = mysqli_num_rows($result);

if ($number_of_rows == 0) {
    $query = "INSERT INTO users VALUES (0,'$username','$email','$password')";

    $result = mysqli_query($dbcop3, $query) or die ('Error querying.');
    if ($result) {
        echo "Uw gegevens zijn toegevoegt.<br>";
        echo '<a href="../index.php">Index</a><br>';
        echo '<a href="op3.php">Maak nieuwe gebruiker aan</a><br>';
    } else {
        echo 'Er is iets mis gegaan probeer opnieuw:<br>';
        echo '<a href="op3.php">Probeer opnieuw</a><br>';
    }
} else {
    echo 'Er is iets mis gegaan probeer opnieuw:<br>';
    echo '<a href="op3.php">Probeer opnieuw</a><br>';
    exit();
}
mysqli_close($dbcop3);



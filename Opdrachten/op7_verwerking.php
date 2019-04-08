<?php

$dbcop7 = mysqli_connect('localhost', 'dbchallangeuser', 'bPe5qCeDm6KrJt', 'dbchallange') or die('Error connecting.');
$query = "SELECT user_id FROM users";

$result = mysqli_query($dbcop7, $query) or die('Error querying user_id.');
$data = mysqli_fetch_all($result);

foreach ($data as $values) {
    foreach ($values as $value) {
        if (isset($_POST[$value])) {
            $query = "DELETE FROM users WHERE user_id = '$value'";
            $result = mysqli_query($dbcop7,$query) or die('Error querying (DELETE).');
            if ($result) {
                echo 'User is verweiderd uit de database.<br>';
            } else {
                echo 'Helaas er is iets misgegaan in het verweideren van de gebruiker.<br>';
            }
        }
    }
}
mysqli_close($dbcop7);
?>
<br>
<a href="../index.php">Index</a><br>
<a href="op7.php">Terug naar tabel</a>

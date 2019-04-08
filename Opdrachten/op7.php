<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style_joeyop7.css" rel="stylesheet">

</head>
<body>
<?php
$dbcop2 = mysqli_connect('localhost', 'dbchallangeuser', 'bPe5qCeDm6KrJt', 'dbchallange') or die('Error connecting.');

$query = "SELECT user_id, username, email FROM users";

$result = mysqli_query($dbcop2, $query) or die('Error querying.');

$number_of_rows = mysqli_num_rows($result);

if ($number_of_rows == 0) {
    echo "Er zit geen data in de database";
    exit();
} else {
    $data = mysqli_fetch_all($result);
    echo "<table border='1'>";
    echo "<tr>" . "<th>User id</th>" . "<th>Username</th>" . "<th>Email</th>" . "<th>Delete</th>" . "</tr>";
    foreach ($data as $datavalues) {
        echo "<tr>";
        foreach ($datavalues as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "<td><form action='op7_verwerking.php' method='post'><input type='submit' name='" . $datavalues[0] . "' value='Delete'></form></td>";
        echo "</tr>";
    }
    echo "</tr>";
}
mysqli_close($dbcop2);
?>
<a href="../index.php">Index</a>
<br>
</body>
</html>
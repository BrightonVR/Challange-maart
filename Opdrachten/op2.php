<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
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
    echo "<tr>" . "<th>User id</th>" . "<th>Username</th>" . "<th>Email</th>"."</tr>";
    foreach ($data as $datavalues) {
        echo "<tr>";
        foreach ($datavalues as $value) {
            echo "<td>" . $value . "</td>";
        }
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
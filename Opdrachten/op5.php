<?php
function idOptions()
{
    $dbc = mysqli_connect('localhost', 'dbchallangeuser', 'bPe5qCeDm6KrJt', 'dbchallange') or die('Error connecting.');

    $query = "SELECT user_id FROM users";
    $result = mysqli_query($dbc, $query);
    $data = mysqli_fetch_all($result);

    echo "<option value=''></option>";
    foreach ($data as $values) {
        foreach ($values as $value) {
            echo "<option value='" . $value . "'>" . $value . "</option>";
        }
    }

    mysqli_close($dbc);
}

//$dbc = mysqli_connect('localhost', 'dbchallangeuser', 'bPe5qCeDm6KrJt', 'dbchallange') or die('Error connecting.');
//
//$query = $query = "SELECT * FROM users";
//$result = mysqli_query($dbc, $query);
//$data = mysqli_fetch_all($result);


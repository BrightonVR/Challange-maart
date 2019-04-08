<?php
include 'op5.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style_joey.css" rel="stylesheet">
    <script>


        // code niet van mij dat hier onder staat
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "op6.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
<a href="../index.php">Index</a>
<h2>Wijzig hier de gegevens van een gebruiker:</h2>
<form action="op4_verwerking.php" method="post">
    <label>User id:
        <select id="select_user" name="user_id" onchange="showUser(this.value)">
            <?php idOptions(); ?>
        </select>
    </label><br>
        <label>Gebruikersnaam: <input id="username" name="username" value=""></label><br>
        <label>E-mail: <input id="email" type="email" name="email" value=""></label><br>
        <label>Wachtwoord: <input id="password" type="password" name="password" value=""></label><br>
        <input type="submit" name="submit"><br>
</form>
<div id="txtHint"></div>
</body>
</html>
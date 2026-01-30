<?php
include "init.php";

if (isset($_POST["lisa"])) {
    $_SESSION["tellimused"][] = [
        "kirjeldus" => $_POST["kirjeldus"],
        "korpus" => 0,
        "kuvar" => 0,
        "pakitud" => 0
    ];
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "nav.php"; ?>

<h2>Uus tellimus</h2>
<form method="post">
    Kirjeldus:<br>
    <textarea name="kirjeldus" required></textarea><br>
    <button name="lisa">Lisa tellimus</button>
</form>

</body>
</html>

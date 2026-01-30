<?php
include "init.php";

/* Tegevused */
if (isset($_GET["korpus"])) {
    $_SESSION["tellimused"][$_GET["korpus"]]["korpus"] = 1;
}

if (isset($_GET["kuvar"])) {
    $_SESSION["tellimused"][$_GET["kuvar"]]["kuvar"] = 1;
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Komplekteerimine</title>
</head>
<body>

<?php include "nav.php"; ?>

<h2>Komplekteerimine</h2>

<table>
    <tr>
        <th>Kirjeldus</th>
        <th>Korpus</th>
        <th>Kuvar</th>
    </tr>

    <?php
    foreach ($_SESSION["tellimused"] as $id => $t) {
        echo "<tr>";
        echo "<td>{$t['kirjeldus']}</td>";

        // Korpus
        if ($t["korpus"] == 0) {
            echo "<td><a href='?korpus=$id'>Lisa korpus</a></td>";
        } else {
            echo "<td>✔ olemas</td>";
        }

        // Kuvar
        if ($t["kuvar"] == 0) {
            echo "<td><a href='?kuvar=$id'>Lisa kuvar</a></td>";
        } else {
            echo "<td>✔ olemas</td>";
        }

        echo "</tr>";
    }
    ?>

</table>

</body>
</html>

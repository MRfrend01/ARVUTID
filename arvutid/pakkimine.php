<?php
include "init.php";

if (isset($_GET["id"])) {
    $_SESSION["tellimused"][$_GET["id"]]["pakitud"] = 1;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "nav.php"; ?>

<h2>Pakkimine</h2>
<table>
    <?php
    foreach ($_SESSION["tellimused"] as $id => $t) {
        if ($t["korpus"] && $t["kuvar"] && !$t["pakitud"]) {
            echo "<tr>
            <td>{$t['kirjeldus']}</td>
            <td><a href='?id=$id'>Paki</a></td>
        </tr>";
        }
    }
    ?>
</table>

</body>
</html>

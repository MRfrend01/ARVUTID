<?php include "init.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "nav.php"; ?>

<h2>Statistika</h2>
<?php
$kokku = count($_SESSION["tellimused"]);
$valmis = 0;

foreach ($_SESSION["tellimused"] as $t) {
    if ($t["pakitud"]) $valmis++;
}

echo "Tellimusi kokku: $kokku<br>";
echo "Lõpetatud tellimusi: $valmis";
?>

</body>
</html>

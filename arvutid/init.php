<?php
session_start();

if (!isset($_SESSION["tellimused"])) {
    $_SESSION["tellimused"] = [];
}
?>

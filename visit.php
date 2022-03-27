<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once "allow.php";
} else {
    require_once "Notallow.php";
}
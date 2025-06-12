<?php
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $fav_animal = test_input($_POST["fav_animal"]);

$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['fav_animal'] = $fav_animal;

echo "Hey! " . htmlspecialchars($fname) . " " . htmlspecialchars($lname) . " your favourite animal " . htmlspecialchars($fav_animal) . " is awesome";

echo "<p>Session stored: first name: " . $_SESSION['fname'] . ", surname :" . $_SESSION['lname'] . ", favourite animal: " . $_SESSION['fav_animal'] . "</p>";
} else {
    echo "Invalid access.";
}
?>
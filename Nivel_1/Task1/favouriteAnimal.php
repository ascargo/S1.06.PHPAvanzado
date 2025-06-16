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

    $email = isset($_POST["email"]) ? test_input($_POST["email"]) : null;

$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['email'] = $email;
$_SESSION['fav_animal'] = $fav_animal;

echo "Hey! " . htmlspecialchars($fname) . " " . htmlspecialchars($lname) . " your favourite animal, " . htmlspecialchars($fav_animal) . ", is awesome";

echo "<p>Session stored: first name: " . htmlspecialchars($_SESSION['fname']) . ", surname :" . htmlspecialchars($_SESSION['lname']) . ", favourite animal: " . htmlspecialchars($_SESSION['fav_animal']) . "</p>";

if($email) {
    echo "<p>Your email is: " . htmlspecialchars($email) . "</p>";
}
} else {
    echo "Invalid access.";
}
?>
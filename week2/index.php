<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST["firstName"])) {
        $errors[] = "First name cannot be empty";
    }

    if (empty($_POST["lastName"])) {
        $errors[] = "Last name cannot be empty";
    }

    if (!isset($_POST["maritalStatus"])) {
        $errors[] = "Marital status must be selected";
    }

    $birthDate = $_POST["birthDate"];
    if (!strtotime($birthDate)) {
        $errors[] = "Invalid birth date";
    }

    $feet = intval($_POST["feet"]);
    $inches = intval($_POST["inches"]);   
    $height = $feet * 12 + $inches; 
    if ($height <= 0 || $height > 120) { 
        $errors[] = "Invalid height";
    }

    $weight = $_POST["weight"];
    if ($weight <= 0 || $weight > 1000) { 
        $errors[] = "Invalid weight";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        echo "<p>Form submitted successfully!</p>";
    }
} else {
    header("Location: index.view.php");
    exit;
}
require "index.view.php";

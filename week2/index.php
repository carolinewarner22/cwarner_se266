<?php

require 'functions.php';

$fName = '';
$lName = '';
$maritalStatus = '';
$birthdate = '';
$heightFt = '';
$heightIn = '';
$weight = '';

if (isset($_POST['patient_info_submit'])) {
    $fName = filter_input(INPUT_POST,'fName', FILTER_SANITIZE_STRING);
    $lName = filter_input(INPUT_POST,'lName', FILTER_SANITIZE_STRING);
    $maritalStatus = filter_input(INPUT_POST,'maritalStatus', FILTER_SANITIZE_STRING);
    $birthdate = filter_input(INPUT_POST,'birthdate', FILTER_SANITIZE_STRING);
    $heightFt = filter_input(INPUT_POST,'heightFt', FILTER_VALIDATE_INT);
    $heightIn = filter_input(INPUT_POST,'heightIn', FILTER_VALIDATE_INT);
    $weight = filter_input(INPUT_POST,'weight', FILTER_VALIDATE_FLOAT);
}

require 'index.view.php';
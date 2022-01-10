<?php
$first_name = htmlentities(trim($_POST['first_name']));
$last_name = htmlentities(trim($_POST['last_name']));
$email = htmlentities(trim($_POST['email']));
$acc_pass = htmlentities(trim($_POST['acc_pass']));
include "code/dbconnect.php";

$query = "INSERT INTO customers (first_name, last_name, email, acc_pass) VALUES (?,?,?,?)";
$stmt = $db->prepare($query);
$stmt->bind_param('ssss', $first_name, $last_name, $email, $acc_pass);
$stmt->execute();
header("Location: login.php");
echo "Registration Successfull...";
$stmt->close();
$db->close();

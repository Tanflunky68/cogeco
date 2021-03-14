<?php
require_once('Query.php');

$lines = array();
$query = new Query();

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$password = password_hash($password, PASSWORD_DEFAULT);

$lines = $query->addUserAccount($email,$password,$name,$lastName);
echo json_encode($lines);
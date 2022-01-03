<?php

require_once "require/database.php";

$database = new database;
$name  = $_POST['name'];
$email = $_POST['email'];
$pass  = $_POST['password'];

$res = $database->register_process($name,$email,$pass);
if ($res) {
    header("location:index.php?msg=User Registered Successfully..!&success=1");
}

?>
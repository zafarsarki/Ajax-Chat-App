<?php

require_once "require/database.php";

$database = new database();
$email = $_POST['email'];
$pass = $_POST['password'];

$result = $database->login_process($email,$pass);
if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['user'] = $row;
    $database->set_online_status($_SESSION['user']['user_id'],1);
    header("location:chat.php");
}else{
    header("location:index.php?msg=Invalid Password&success=0");
}

?>
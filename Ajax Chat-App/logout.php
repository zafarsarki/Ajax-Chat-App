<?php
require_once "require/database.php";

if ($_SESSION['user'] ?? null) {

    $database = new database;
    $database->set_online_status($_SESSION['user']['user_id'], 0);
    session_unset();
    session_destroy();
    header("location:index.php");
}
else{
    require_once "session.php";
}

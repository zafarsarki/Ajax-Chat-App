<?php

require_once "require/database.php";
require_once "session.php";

date_default_timezone_set("Asia/karachi");
if (isset($_POST['action']) && $_POST['action'] == "send_msg") {
    $msg  = $_POST['msg'];
    $id   = $_SESSION['user']['user_id'];
    $time = date("h:i:s");
    $database = new database();
    $res = $database->send_msgs($msg,$id,$time);

    if ($res) {
        echo "message send";
    }

}


?>
<?php

session_start();
if (!isset($_SESSION['user'])) {
    header("location:index.php?msg=Please login to you account&success=0");
}



?>
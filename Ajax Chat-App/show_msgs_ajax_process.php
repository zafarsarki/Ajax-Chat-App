<?php
require_once "require/database.php";
if (!isset($_SESSION['user'])) {
    header("location:index.php?msg=Please login to you account&success=0");
}

$database = new database;
$res = $database->show_msgs();
if (mysqli_num_rows($res)) {
    while($row = mysqli_fetch_assoc($res)){
        ?>
            <p style="margin-left: 10px;">
                <?php echo $row['full_name']." => "?>
                <?php echo $row['msg']?>
                <?php echo " (".$row['added_on'].")"?>
            </p> 
        <?php
    }
}


?>
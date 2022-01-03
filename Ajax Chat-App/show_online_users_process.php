<?php
// require_once "session.php";
require_once "require/database.php";
if (!isset($_SESSION['user'])) {
    header("location:index.php?msg=Please login to you account&success=0");
}

$database = new database;
$res = $database->show_online_users(1);
if (mysqli_num_rows($res)) {
    while ($row = mysqli_fetch_assoc($res)) {
        
        ?>
        <div style="margin: 20px;">
            <span style="margin-top:5px; float: left;width:10px; height:10px; background-color:green; border-radius:50%;"></span>&nbsp;&nbsp;&nbsp;<?php echo $row['full_name']; ?><br>
        </div>

            <!-- <span style="float: left;margin:15px 15px;width:10px; height:10px; background-color:green; border-radius:50%;"></span><span style="float: left; margin:10px 0px;"><?php //echo $row['full_name']?></span> -->
               
        <?php
        
    }
}



?>
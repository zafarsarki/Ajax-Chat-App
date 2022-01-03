<?php

require_once "library/form.php";
if (isset($_GET['success'])) {
?>
<h3 style='color:<?php echo $_GET['success']?'green':'red'; ?>; text-align:center;'><?php echo $_GET['msg']?></h3>
<?php
}
$form = new form('login_process.php','POST');
$form->login_form();

?>
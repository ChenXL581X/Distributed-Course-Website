<?php
include 'includes/header.php';
$user = new User();
	
?>
<div class="main">
<?php 
if($user->isLoggedIn()){
	echo "登录成功";
}
?>
</div>
<?php
include "includes/footer.php";
?>
<?php
include 'includes/header.php';
?>
<div class="main">
<div>
<form  action="createAccount_run.php" id="reg" method="post">
		<input id="userreg" type="text" name="userreg" tabindex="3" value="<?php echo Input::get('userreg');?>" placeholder="用户名">
		<span class="sp" id="reg-check"></span>
		<input name="name"  value="<?php echo Input::get('name');?>" placeholder="真实姓名">
		<input placeholder="密码" type="password" name="password_reg">
		<input name = "token" type="hidden" value="<?php echo Token::generate(); ?>"  >
		<input type="radio" name="group" value="1" checked> 学生
		<input type="radio" name="group" value="2" > 教师      
		<button name="submitreg"  value="createAccount" type="submit" id="sign-in-submit">create</button>
			
</form>
</div>

<div>
<form method="post" action="createAccount_run.php" enctype="multipart/form-data">
<h3>导入Excel表：</h3><input  type="file" id="file" name="file_stu" />
<!-- <input type="submit"  value="fromExcel" /> -->
<input name = "token" type="hidden" value="<?php echo Token::generate(); ?>"  >
<button type="submit" id="fromExcel" name="submitreg" value="fromExcel">导入</button>
</form>

</div>

</div>
<?php
include "includes/footer.php";
?>
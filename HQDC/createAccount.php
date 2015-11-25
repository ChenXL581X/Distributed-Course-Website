<?php
include 'includes/header.php';
?>
<div class="main">
<div>
<form  action="createAccount_run.php" method="post">
		<input type="text" name="userreg" value="<?php echo Input::get('userreg');?>" placeholder="用户名">
		<input type="text" name="name"  value="<?php echo Input::get('name');?>" placeholder="姓名">
<!-- 		<input type="password" placeholder="密码" name="password_reg"> -->
		<input type="hidden" name = "token" value="<?php echo Token::generate(); ?>"  >
		<input type="radio" name="group" value="S" checked> 学生
		<input type="radio" name="group" value="T" > 教师      
		<button name="submitreg"  value="createAccount" type="submit" id="sign-in-submit">创建</button>
			
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
<?php 
require_once 'core/init.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>创建账号</title>
<script src="js/jquery-2.0.3.min.js"></script>
</head>
<body>
<div>
    <form   method="post">
<!--     <fieldset> -->
<!--     <legend>注册信息</legend> -->
        <h3>输入账号信息：</h3>
		用户名：<input type="text" name="username" id="username" placeholder="请输入10位学号或教职工号">*<br>
		姓名：<input type="text" name="name" id="name" placeholder="请输入真实姓名"><br>
                            密码：<input type="password" placeholder="请输入账号密码" name="password" id="password">*<br>
                            确认密码：<input type="password" placeholder="请确认账号密码" name="password_confirm" id="password_confirm">*<br>
		账号类型：<input type="radio" name="group" id="group" value="S" checked> 学生
		<input type="radio" name="group" id="group" value="T" > 教师  *   <br> 
		<button name="submitreg"  value="createAccount" type="button" id="fromhand">创建</button>
<!-- 	</fieldset> -->
    </form>
</div>

<div>
    <form method="post"  action="createAccount_run.php" enctype="multipart/form-data" id="form">
        <h3>导入Excel表：</h3>
        <input type="button" id="exportExcelModel" value="导出Excel模板"/><br>
        <input type="file" id="file_stu" name="file_stu" /><br>
     <!-- <input type="submit"  value="fromExcel" /> -->
<!--         <input name = "token" type="hidden"> -->
     密码类型：<input type="radio" name="radio_password" id="radio_password" value="default_password" checked> 默认密码（与用户名相同）<br>
        <input type="radio" name="radio_password" id="radio_password" value="user_defined"> 自定义 
        <input type="text" name="defined_password" id="defined_password" placeholder="请输入自定义密码"><br>
        <button type="button" id="fromExcel" name="submitreg" value="fromExcel">导入</button>
    </form>
</div>
<div id="message"></div>

<script src="js/createAccount.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/global.js"></script>
</body>
</html>

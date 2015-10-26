<?php
require_once 'core/init.php';


if(Input::exists('post')){
	if(Token::check(Input::get('token'))){
		//echo $_POST['userreg'];

		$validate = new Validate();
		$validation = $validate-> check($_POST,array(
			'userreg' => array(
				'name' =>'username' ,           //in the table 
				'required' => true,
				'min' => 6,
				'max' => 20,
				'unique' => 'users',


				),
			'password_reg' => array(
				'name' =>'password' ,
				'required' =>true,
				'min' => 6
				),
			'password_agan' => array(
				'name' =>'password_agan' ,
				'required' => true,
				'matches' => 'password_reg'

				),
			'name' => array(
				'name' =>'name' ,
				'required' =>true,
				'min' => 2,
				'max' => 50
				)
		));
		if($validation->passed()){
			$user = new User();
			$salt = Hash::salt(32);
			

			try{
				$user->create(array(
					'username'=> Input::get('userreg'),
					'password'=>Hash::make(Input::get('password_reg'),$salt),
					'salt'=>$salt,
					'name'=>Input::get('name'),
					'joined'=>date('Y-m-d H:i:s'),
					'group'=> 1
					));
			Session::flash('home'  ,  'you registered successfully');
			
			Redirect::to('index.php');			
			}catch(Exception $e){
				die($e->getMessage());
			}

		}else {
			foreach ($validation->errors() as $error) {
				echo $error.'<br/>';
			}
		}
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="regbox" style="display: block;">
	<a href="#" id="tolog">已有账号？转到登录</a><a id="tolog1" href="#"><i class="fa fa-arrow-circle-o-right log"></i></a>

	<form  style = "width:500px;"action="#" id="loginf" method="post">
		<input id="userreg" type="text" name="userreg" tabindex="3" value="<?php echo Input::get('userreg');?>" placeholder="电子邮件" title="请输入格式为 'someone@provider.com' 的电子邮件" required="">
		<span class="sp" id="reg-check"></span>
		<input name="name" tabindex="4" value="<?php echo Input::get('name');?>" placeholder="姓名" title="请输入您的姓名" required="">
		<input placeholder="密码" type="password" name="password_reg"  pattern=".{6,}" tabindex="4" title="请输入六位字符以上密码" required="">

		<input placeholder="确认密码" type="password" name="password_agan"  pattern=".{6,}" tabindex="5" title="请确认您的密码" required="">
		<input name = "token" type="hidden" value="<?php echo Token::generate(); ?>"  >
		<button name="submitreg"  value="<?php echo Input::get('submitreg');?>" type="submit" id="sign-in-submit">注册</button>
			
	</form>
</div>
</body>
</html>
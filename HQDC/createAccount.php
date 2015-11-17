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
					'group'=> Input::get('group')
					));
			Session::flash('home'  ,  'create account successfully');
			
			//Redirect::to('index.php');			
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

<?php
include 'includes/header.php';
?>
<div class="main">
<form  "action="#" id="reg" method="post">
		<input id="userreg" type="text" name="userreg" tabindex="3" value="<?php echo Input::get('userreg');?>" placeholder="用户名">
		<span class="sp" id="reg-check"></span>
		<input name="name"  value="<?php echo Input::get('name');?>" placeholder="真实姓名">
		<input placeholder="密码" type="password" name="password_reg">
		<input name = "token" type="hidden" value="<?php echo Token::generate(); ?>"  >
		<input type="radio" name="group" value="1" checked> 学生
		<input type="radio" name="group" value="2" > 教师      
		<button name="submitreg"  value="<?php echo Input::get('submitreg');?>" type="submit" id="sign-in-submit">create</button>
			
	</form>
</div>
<?php
include "includes/footer.php";
?>
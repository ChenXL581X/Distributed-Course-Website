<?php
require_once 'core/init.php';

$user = new User();
if(!$user->isLoggedIn()){
	Redirect::to('index.php');
}

if(Input::exists('post')){
	if(Token::check(Input::get('token'))){
		$validate = new Validate();
		$validation = $validate->check($_POST,array(
			'password_current' =>array(
				'name' =>'password',
				'required' => 'true',
				'min' => 6
				),
			'password_new' =>array(
				'name' => 'new password',
				'required' => 'true',
				'min' => 6
				),
			'password_agan' =>array(
				'name' => 'password agan',
				'required' => 'true',
				'min' => 6,
				'matches' =>'password_new'
				),			
			));
		if($validation->passed()){
			if(Hash::make(Input::get('password_current'), $user->data()->salt)!== $user ->data()->password){
				echo 'you password is wrong';
			}else{
				$salt = Hash::salt(32);
				$user ->update(array(
					'password' =>Hash::make(Input::get('password_new'),$salt),
					'salt' => $salt
					));
				Session::flash('home', 'your password has been changed!');
				Redirect::to('index.php');
			}

		}else{
			foreach ($validation->errors() as $error) {
				echo $error,'<br>';
			}
		}
	}
}


?>
         <form action="" method="post">

	<p>
		<label for="password_current">current PASSWORD</label>
		<input type="password" name="password_current" id="password_current">
	</p>
	<p>
		<label for="password_new">new PASSWORD</label>
		<input type="password" name="password_new" id="password_new">
	</p>
	<p>
		<label for="password_agan">current PASSWORD</label>
		<input type="password" name="password_agan" id="password_agan">
	</p>
		<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
	<p>

		<input type="submit"  value="change">
	</p>
    </form>
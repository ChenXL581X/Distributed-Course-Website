<?php
require_once 'core/init.php';


if(Input::exists('post')){
	if(Token::check(Input::get('token'))){
		//echo $_POST['userreg'];
		Session::delete('home');
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
			Session::flash('home'  ,  '您已经成功注册');
			
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
<?php

require_once 'core/init.php';
// //var_dump(Config::get ('mysql/host'));

// $user = DB::getInstance()->get('users',array('username','=','cai'));
// // $user = DB::getInstance()->query("SELECT * from users where username = ?",array('cai'));
// if(!$user -> count()){
// 	echo "no user";
// }else{
// 	// foreach ($user -> results()  as  $user) {
// 	// 	echo $user->username . '<br/>';
// 	// }
// 	echo $user -> first() -> username;
// }
// $user = DB::getInstance() -> update('users', 3,array(
// 	'username' => 'Dale',
// 	'password' => 'new pass',
// 	'salt' => 'salt',

// ));
if(Session::exists('home')){
	
	echo Session::flash('home');
}

$user = new User();
if($user -> isLoggedIn()){
?>

	<p>Hello <a href="profile.php?user=<?php echo escape($user->data()->username); ?>"><?php echo escape($user->data()->name); ?></a> </p>
	<ul>
		<li><a href="logout.php">log out</a> 	  </li>
		<li><a href="update.php">update</a>  </li>
		<li><a href="changepassword.php">change password</a>  </li>
	</ul>
	<?php
	if($user->hasPermission('admin')){
		echo 'you are a administrator';
	}
}else{
	echo '<p>you need to <a href="login.php"> log in </a>or <a href = "register.php">register</a></p>';
}
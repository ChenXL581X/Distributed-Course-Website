<?php
require_once 'core/init.php';

// $user = new User();
// if ($user->isLoggedIn()) {
//     Redirect::to('index.php');
// }

if (Input::exists('post')) {
    if (Token::check(Input::get('token'))) {
    	Session::delete('home');

        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array(
                'required' => true,
                'name' => 'username'
            ),
            'password' => array(
                'required' => true,
                'name' => 'password'
            )
        ));

        if ($validation->passed()) {

            $user = new User();

            $remember = (Input::get('remember') === 'on') ? true : false;
            $login = $user->login(Input::get('username'), Input::get('password'), $remember);

            if ($login) {

            	Session::flash('index',"您已经成功登陆");

                Redirect::to('index.php');
            } else {
                echo '<p>Sorry, logging in failed </p>';
            }

        } else {
            foreach ($validation->errors() as $error) {
                echo '<i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;', $error, '<br>';
                echo '<br />';
            }
        } 

    }
}

?>
<?php
require_once 'core/init.php';

$user = new User();
if ($user->isLoggedIn()) {
    Redirect::to('index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src="js/main.js"></script>
</head>
<body>
  
    <form action="" method="post">
        <h1>Log in</h1>
        <div class="inset">
        <?php
        if (Input::exists('post')) {
            if (Token::check(Input::get('token'))) {

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
        <p>
            <label for="username">USERNAME</label>
            <input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>">
        </p>
        <p>
            <label for="password">PASSWORD</label>
            <input type="password" name="password" id="password">
        </p>
        <p>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me for 1 month</label>
        </p>
        </div>

        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
        <p class="p-container">
            <span>Forgot password?</span>
            <input type="submit" name="go" id="go" value="Log in">
        </p>
    </form>
</body>
</html>
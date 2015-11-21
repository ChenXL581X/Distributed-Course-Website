<?php

// include 'phpExcel/PHPExcel.php';
// include 'phpExcel/PHPExcel/Writer/Excel2007.php';
require_once 'core/init.php';
if(Input::exists('post')){
	if(Token::check(Input::get('token'))){
// 	    echo "hello world";
// 	    echo $_POST['submitreg'];
	    if ($_POST['submitreg'] == "createAccount")
	    {
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
	        
	        } else {
	            foreach ($validation->errors() as $error) {
	                echo $error.'<br/>';
	            }
	        }
	    }
	    // 	        首先调用文件类将上传文件存储到服务器端，并返回存储路径和文件名
	    // 	        然后调用excel类读取出excel表格中的信息并返回一个数组
	    // 	        之后调用user中的create函数循环创建账号
	    //    显示不能创建的账号。
	    if ($_POST["submitreg"] == 'fromExcel') {
	        $excel = new Excel();
	        //可以设置保存文件的路径默认为 $path = './upfile/Excel';
	        // $excel->setPath($path);

	        $resultArr = $excel->importExcel();

	        $user = new User();
	        $salt = Hash::salt(32);

	        foreach ($$resultArr as $value) {
	        	try{
	        		$user->create(array(
	        			'username' => $value[1],
	        			'password' => $value[1],
	        			'salt' => $sqlt,
	        			'name' => $value[2],
	        			'joined' => date('Y-m-d H:i:s'),
	        			'group' => $value[3]
	        			));
	        		Session::flash('home' , 'create {$value[1]} account successfully');
	        	}catch(Exception $e) {
	        		die($e->getMessage());
	        	}
	        }

	    }
	    

		
	}
}

?>
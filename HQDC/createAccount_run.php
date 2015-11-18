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
// 	        echo "hello world";
	        $excel = new Excel();
	        //可以设置保存文件的路径默认为 $path = './upfile/Excel';
	        // $excel->setPath($path);
	        
	        //将文件存储到服务器，不然无法读取
// 	        $filename = $excel->storeExcel();
	        $resultArr = $excel->importExcel();
	        print_r($resultArr);

// 	        if (! empty ( $_FILES ['file_stu'] ['name'] ))
// 	        {
// 	            $tmp_file = $_FILES ['file_stu'] ['tmp_name'];
// 	            $file_types = explode ( ".", $_FILES ['file_stu'] ['name'] );
// 	            $file_type = $file_types [count ( $file_types ) - 1];
// 	            /*�б��ǲ���.xls�ļ����б��ǲ���excel�ļ�*/
// 	            if (strtolower ( $file_type ) != "xlsx")
// 	            {
// 	                echo  "�����ϴ�";
// 	            }
// 	            /*�����ϴ�·��*/
// 	            $savePath = './upfile/';
// 	            /*��ʱ���������ϴ����ļ�*/
// 	            $str = date ( 'Ymdhis' );
// 	            $file_name = $str . "." . $file_type;
// 	            /*�Ƿ��ϴ��ɹ�*/
// 	            if (! copy ( $tmp_file, $savePath . $file_name ))
// 	            {
// 	                echo "error";
// 	            }
// 	            /*
// 	             *���ϴ���Excel���ݽ��д������ɱ������,����������������������ExcelToArray����
// 	             ע�⣺�������ִ���˵������������read��������Excelת��Ϊ���鲢���ظ�$res,�ٽ������ݿ�д��
// 	             */
	        
// 	            $objReader = PHPExcel_IOFactory::createReader('Excel2007');
// 	            $objPHPExcel = PHPExcel_IOFactory::load($savePath . $file_name);
// 	            $sheet = $objPHPExcel->getSheet(0);
// 	            $highestRow = $sheet->getHighestRow(); // ȡ��������
// 	            $highestColumn = $sheet->getHighestColumn(); // ȡ��������
// 	            for ($j = 2; $j <= $highestRow; $j++)
// 	                for ($k = 'A'; $k <= $highestColumn; $k++) {
// 	                    $str = iconv('utf-8', 'gbk', $objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue()). '\\';
// 	                    echo $str;
// 	                }
// 	        }
	    }
	    

		
	}
}

?>
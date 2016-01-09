<?php
require_once 'core/init.php';
if (Input::exists('post')) {

        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'taskid' => array(
                'required' => true,
                'name' => 'taskid'
            )
        ));
        if($validation->passed())
        {
            $teacher = new Teacher();
            $id = Input::get('taskid');
            try{
                $teacher->_taskOperation->taskDelete($id);
            	echo "success";
            }catch(Exception $e){
                die('error'.$e->getMessage());
            }
            echo "success";
        }else {
             $errorInfo = '';
            foreach ($validation->errors() as $error) {
                //echo $error;
                $errorInfo.=($error.'<br>');
            }
            echo 'error';
        }
}

?>
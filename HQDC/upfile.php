<?php
require_once 'core/init.php';
$res["error"] = "";//错误信息
$res["msg"] = "";//提示信息
if (Input::exists('post')) {
    if (Token::check(Input::get('token'))) {

        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'taskId' => array(
                'required' => true,
                'name' => 'taskId'
            )
        ));
        if($validation->passed())
        {
            $teacher = new Teacher();
            try{
                $file = Input::getFile('file');
                if ($file['error']>0) {
                    $res["error"] = "error";
                }
                else {
                    $rs=$teacher->_taskOperation->upfile($file,array(
                        'name'=> $file['name'],
                        'type'=>$file['type'],
                        'url'=>FileUtils::GetPath()."/".$file['name'],
                        'task_id'=>Input::get('taskId')
                        ));
                    $res["msg"] = "ok".$rs;
                }
            }catch(Exception $e){
                $res["error"] = "error:".$e->getMessage();
            }

        }else {
             $errorInfo = '';
            foreach ($validation->errors() as $error) {
                //echo $error;
                $errorInfo.=($error.'<br>');
            }
            $res["error"] = 'failed:'.$errorInfo;
        }

    }
}
echo json_encode($res);
?>
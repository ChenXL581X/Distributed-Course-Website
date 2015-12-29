<?php
require_once 'core/init.php';

if (Input::exists('post')) {
    if (Token::check(Input::get('token'))) {
    	Session::delete('home');

        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'title' => array(
                'required' => true,
                'name' => 'title'
            ),
            'type' => array(
                'required' => true,
                'name' => 'title'
            ),
            'begintime' => array(
                'required' => true,
                'name' => 'begintime'
            ),
            'endtime' => array(
                'required' => true,
                'name' => 'endtime'
            ),
            'desc' => array(
                'required' => true,
                'name' => 'desc'
            )
        ));
        if($validation->passed())
        {
            $teacher = new Teacher();
            $id = Input::get('taskId');
            try{
                $teacher->_taskOperation->taskUpdate(array(
                    'title'=> Input::get('title'),
                    'teacher_id'=>$teacher->data()->id,
                    'type'=>Input::get('type'),
                    'start_time'=>strtotime(Input::get('begintime')),
                    'end_time'=>strtotime(Input::get('endtime')),
                    'context'=> Input::get('desc')
                    ),$id);
            Redirect::to("settask.php?taskmark=$id");
            }catch(Exception $e){
                die($e->getMessage());
            }

        }else {
             $errorInfo = '';
            foreach ($validation->errors() as $error) {
                //echo $error;
                $errorInfo.=($error.'<br>');
            }
            
            Session::flash('login',$errorInfo);
            Redirect::to('login.php?tab=toreg');
        }

    }
}

?>
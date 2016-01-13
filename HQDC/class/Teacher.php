<?php
/**
* 
*/
class Teacher extends User
{
	public $_taskOperation;
	private $_info,
			$_materialsOperation;

	function __construct($user = null)
	{
		parent::__construct($user);
		if(parent::isLoggedIn()){
			$this->_taskOperation = new TaskOperation();
			$this->_materialsOperation = new MaterialsOperation();
			$id = $this->data()->id;
			if($this->findInfo($this->_data->id))
			{
				$this->_isLoggedIn = true;
			}
			else
			{ 
				// echo "<script>alert('权限不足');location.href='admin.php';</script>";
			}	
		}
		
	}

	function findInfo($user)
	{
		if ($user) {
		    $field = 'teacher_id';
		    $data = $this->_db->get('teacher_info', array($field, '=', $user));
		    if ($data!=null&&$data->count()) {
		        $this->_info = $data->first();
		        return true;
		    }
		}
		return false;
	}
	function findByUser($userId){
		if ($userId) {
		    $field = 'user_id';
		    $data = $this->_db->get('teacher', array($field, '=', $userId));
		    if ($data!=null&&$data->count()) {
		        $this->_info = $data->first();
		        return $this;
		    }
		}
		return false;

	}
	function getInfo()
	{
		return $this->_info;
	}
}
?>
<?php
/**
* 
*/
class Teacher extends User
{

	function __construct($user = null)
	{
		parent::__construct($user);
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
?>
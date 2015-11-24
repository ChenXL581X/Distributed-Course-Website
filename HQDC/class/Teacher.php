<?php
/**
* 
*/
class Teacher extends User
{
	public $_taskOperation;

	function __construct($user = null)
	{
		parent::__construct($user);
		$this->_taskOperation = new TaskOperation();
	}
}
?>
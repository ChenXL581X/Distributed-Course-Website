<?php
class Homework
{
	private $_dbSubmit;
	function __construct()
	{
		$this->_dbSubmit = new DBTaskSubmit();
	}
	public function submit($file,$fields = array())
	{
		$rs=FileUtils::upfile($file);
		$this->_dbSubmit->create($fields);
	}
}
?>
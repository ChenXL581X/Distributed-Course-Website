<?php
/**
* 
*/
class TaskOperation
{
	private $_dbtask;

	function __construct()
	{
		$this->_dbtask = new DBTask();
	}

	public function taskCreate($fields = array())
	{
		$this->_dbtask->create($fields);
	}
	public function taskUpdate($fields = array())
	{
		$this->_dbtask->update($fields);
	}
	public function taskDelete($fields = array())
	{
		$this->_dbtask->delete($fields);
	}
	public function taskFindById($id)
	{
		return $this->_dbtask->findById($id);
	}
	public function taskFindAll()
	{
		return $this->_dbtask->findAll();
	}
	public function upfile($file,$fields)
	{
		FileUtils::upfile($file);
		$f = new DBFile();
		$fields['task_id']= $this->_dbtask->lastInsert();
		$f->create($fields);
	}
}
?>
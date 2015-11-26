<?php
class DBTable{
	protected $_db,
	        $_data,
	        $_tablename;

	function __construct() 
	{
	    $this->_db = DB::getInstance();
	}

	public function update($fields = array(), $id = null) 
	{
	    if (!$this->_db->update($this->_tablename, $id, $fields)) {
	        throw new Exception("There was a problem updating in $_tablename.");
	    }
	}

	public function create($fields = array()) 
	{
	    if (!$this->_db->insert($this->_tablename, $fields)) {
	        throw new Exception("There was a problem inserting in $_tablename");
	    }
	}

	public function findByID($id) 
	{
        $data = $this->_db->get($this->_tablename, array("id","=",$id));
        if ($data != false && $data->count()) {
            //$this->_data = $data->first();
            return $data->results();
        }
        else return false;	 
	}

	public function findAll()
	{
		$sql="select * from ".$this->_tablename;
		$data = $this->_db->query($sql, null);
        if ($data != false && $data->count()) {
            //$this->_data = $data->first();
            return $data->results();
        }
        else return false;	 
	}
	public function data(){
		return $this->_data;
	}
    public function lastInsert(){
    	if(!$this->_db->query ('SELECT LAST_INSERT_ID() as ID')->error()){
			$result = $this->_db->results();
		}
    	return $result[0]->ID;
    }
}
?>
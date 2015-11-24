<?php
class TaskSubmit {
    private $_db;
    private $_tableName;
    private $_jsonArray;
    private $_result;
    
    public function transJson($json) {
        $this->_jsonArray = json_decode($json);
    }
    
    public function __construct() {
        $this->_tableName = 'task_submit';
        $this->_db = DB::getInstance();
    }
    
    public function update() {
        foreach ($this->_jsonArray as $value) {
            $id = array_shift($value);
            $this->_db->update($this->_tableName,id,$value);
        }
        return true;
    }
    
    public function get() {
        $data = $this->_db->get($this->_tableName);
        $this->_result = $data->results();
    }
}
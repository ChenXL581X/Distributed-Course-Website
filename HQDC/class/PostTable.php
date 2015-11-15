<?php
class PostTable implements Table {
    private $tableName = "post";
    private $_db;
    public function __construct(){
        $this->_db = DB::getInstance();
    }
    public function create($fields = array()) {
        if (!$this->_db->insert($this->tableName, $fields)) {
            throw new Exception('There was a problem creating an item.');
        }
    }
    public function delete($ID = null) {
        if(!$this->_db->delete($this->tableName, array('ID','=', $ID))){
            throw new Exception('There was a problem deleting the item.');
        }
    }
    public function update($ID,$fields) {
        if(!$this->_db->update($this->tableName,$ID,$fields)){
            throw new Exception('There was a problem updating the item.');
        }
    }
    public function get($where) {
        if (!$this->_db->get($this->tableName, $where)) {
            throw new Exception("There was a problem geting the item.");
        }
        return $this->_db;
    }

    public function getDB() {
        return $this->_db;
    }
}
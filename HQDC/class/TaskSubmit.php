<?php
<<<<<<< HEAD
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
=======
	class TaskSubmit{
		private $_db,
				$_data;

		public function __construct(){
			$this->_db = DB::getInstance();


		}
		public function create($fields = array()){
	            if (!$this->_db->insert('task_submit', $fields)) {
	                throw new Exception('There was a problem creating an item.');
	            }        	
	        }
        public function delete($id = null){
        	if(!$this->_db->delete('task_submit',array('id','=', $id))){
        		throw new Exception('There was a problem deleting the item.');
        	}

        }
        public function update($id,$fields){
        	if(!$this->_db->update('task_submit',$id,$fields)){
        		throw new Exception('There was a problem updating the item.');
        	}	        	
        }	        
        public function find($id = null){
        	$data = $this->_db->get('task_submit', array('id', '=', $id));
            if ($data->count()) {
                $this->_data = $data->first();
                return $this;
            }else return false;	        	
        }
        public function findWithUserAndTask($userId, $taskId){
        	$data = $this->_db->get('task_submit', array('user_id', '=', $userId));
        	if ($data->count()) {
                foreach ($data->results() as $key => $value) {
                	if($value->task_id == $taskId){
						$this->_data = $value;
						return $this;
                	}
                }
                return false;
            }else return false;	
        }
        public function data(){
        	return $this->_data;

        }
        public function lastInsert(){
        	if(!$this -> _db->query ('SELECT LAST_INSERT_ID() as id')->error()){
				$result = $this->_db->results();
			}
      		
      		
        	return $result[0]->id;
        }


	}
?>
>>>>>>> origin/master

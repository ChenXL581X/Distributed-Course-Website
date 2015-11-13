<?php
	class Post{

		private $_db,
				$_data,
				$_postReplys;

		public function __construct(){
			$this->_db = DB::getInstance();


		}
		public function create($fields = array()){
	            if (!$this->_db->insert('post', $fields)) {
	                throw new Exception('There was a problem creating an item.');
	            }        	
	        }
        public function delete($ID = null){
        	if(!$this->_db->delete('post',array('ID','=', $ID))){
        		throw new Exception('There was a problem deleting the item.');
        	}

        }
        public function update($ID,$fields){
        	if(!$this->_db->update('post',$ID,$fields)){
        		throw new Exception('There was a problem updating the item.');
        	}	        	
        }	        
        public function find($ID = null){
        	$data = $this->_db->get('post', array('ID', '=', $ID));
            if ($data->count()) {
                $this->_data = $data->first();
                return $this;
            }else return false;	        	
        }
        public function data(){
        	return $this->_data;

        }
        public function lastInsert(){
        	if(!$this -> _db->query ('SELECT LAST_INSERT_ID() as ID')->error()){
				$result = $this->_db->results();
			}
      		
      		
        	return $result[0]->ID;
        }


	}

?>
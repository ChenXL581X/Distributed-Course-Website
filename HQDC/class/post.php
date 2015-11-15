<?php
	class Post{

		private $_data,
				$_postReplys,
		        $_table;

		public function __construct(Table $postTable){
			$this->_table = $postTable;
		}
// 		public function create($fields = array()){
// 	            if (!$this->_db->insert('post', $fields)) {
// 	                throw new Exception('There was a problem creating an item.');
// 	            }        	
// 	        }
//         public function delete($ID = null){
//         	if(!$this->_db->delete('post',array('ID','=', $ID))){
//         		throw new Exception('There was a problem deleting the item.');
//         	}

//         }
//         public function update($ID,$fields){
//         	if(!$this->_db->update('post',$ID,$fields)){
//         		throw new Exception('There was a problem updating the item.');
//         	}	        	
//         }	        
        public function find($ID = null){
        	$data = $this->_table->get(array('ID', '=', $ID));
            if ($data->count()) {
                $this->_data = $data->first();
                return $this;
            }else return false;	        	
        }
        public function data(){
        	return $this->_data;

        }
        public function lastInsert(){
        	if(!$this -> _table->getDB() ->query ('SELECT LAST_INSERT_ID() as ID')->error()){
				$result = $this->_table->getDB()->results();
			}
        	return $result[0]->ID;
        }


	}

?>
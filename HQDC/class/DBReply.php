<?php
/**
* 
*/
class DBReply extends DBTable
{
	
	function __construct()
	{
		parent::__construct();
		$this->_tablename='post_reply';
	}
	public function findWithIdNotRead($id){
		$data = $this->_db->action('select *',$this->_tablename,array('receiver','=',$id,'and','is_readed','=','0'));
		if($data->count()){
			return $data->results();
		}
		else return false;

	}
}
?>
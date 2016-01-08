<?php
	class Privilege{
		private $_db,$_role,$_result;
		public function __construct(){
			$this->_db = DB::getInstance();
		}
		public function hasPermission($user,$page){

		}
		public function judge($user){
			$teacher = new teacher();
			$student = new student();
			if($user->isLoggedIn()){
				if($teacher->findInfo($user->data()->id)){
					$this->_result = 'teacher';
				}else if($student->findInfo($user->data()->id)){
					$this->_result = 'student';
				}else{
					$this->_result = 'user';
				}


			}else{
				$this->_result = 'tourist';
			}
			return $this->_result;
		}
	}
?>



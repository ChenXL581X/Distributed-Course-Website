<?php
class Mysql{
    
	//连接服务器、数据库以及执行SQL语句的类库
	public $database;
	public $username;
	public $password;
	function mysql()
	{	//构造函数初始化所要连接的数据库
        $this->host = 'localhost';
		$this->username = 'root';
		$this->password = '';
	}
	function link($database)
	{	//连接服务器和数据库
		//设置所有连接的数据库
		
		if($database==""){
			$this->database = 'project';
		}
		else{
			$this->database=$database;
		}
		//连接服务器和数据库

		if($id = new mysqli($this->host,$this->username,$this->password,$this->database)){
			echo "lianjiechenggong";
			if(!mysql_select_db($this->database,$id)){
				echo "数据库连接错误";
				exit;
			}
		}
		else{
			echo "服务器正在维护中，请稍后重试！！！";
			exit;
		}

	}
	function excu($query)
	{	//执行SQL语句
        //var_dump($query);exit;
		mysql_query("set names utf8");
		if($result=mysql_query($query)){
			return $result;
		}
        //else messagebox("!!!");
	}
}
?>
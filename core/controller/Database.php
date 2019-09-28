<?php
class Database {
	public static $db;
	public static $con;
	function Database(){

            $var_server   = "127.0.0.1";
            $var_username = "user";
            $var_password = "pass";
            $var_db       = "prueba";

		$this->user=$var_username;
		$this->pass=$var_password;
		$this->host=$var_server;
		$this->ddbb=$var_db;
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>

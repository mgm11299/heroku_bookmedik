<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		
		
		$this->user="b080ad531912e4";
		$this->pass="c81a9e19";
		$this->host="eu-cdbr-west-02.cleardb.net";
		$this->ddbb="heroku_7ac88d14dbe05ea";
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

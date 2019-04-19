<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="lucho";$this->pass="Fidelymateo150*0";$this->host="localhost";$this->ddbb="katanalite";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
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

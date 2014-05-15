<?php
	class querys{
		// User Querys
		public static function checkUser($cis_nummer){
			$cis_nummer = htmlspecialchars($cis_nummer);
			$query = mysql_query("SELECT * FROM users WHERE cis_number = $cis_nummer");
			$amount = 0;
			if(!empty($query)){
				$amount = mysql_num_rows($query);		
			}
			if($amount == 0 || empty($amount)){
				return false;
			}else{
				return true;
			}
		}
		
		public static function checkModul($modulnr){
			$query = mysql_query("SELECT * FROM curriculum WHERE modulnr = '$modulnr'");
			$amount = 0;
			if(!empty($query)){
				$amount = mysql_num_rows($query);		
			}
			if($amount == 0 || empty($amount)){
				return false;
			}else{
				return true;
			}
		}
		
		public static function addModul($subject,$creditpoints,$modulnr){
			$query = mysql_query("INSERT INTO curriculum VALUES ('$subject','$creditpoints','$modulnr')");
			if(!$query){
				echo "Error adding module.";
			}
		}
		
		public static function addUser($forename,$surname,$password,$email,$cis_number,$cis_password){
			$password = $password;
			$query = mysql_query("INSERT INTO users VALUES ('$forename','$surname','$password','$email','$cis_number','$cis_password')");
			if(!$query){
				echo "Error adding module.";
			}
		}
		
		public static function addMark($subject,$value,$date,$cis_number){
			$date = date('y-m-d', strtotime($date));
			$query = mysql_query("INSERT INTO marks VALUES ('$subject','$value','$date','false','$cis_number')");
			if(!$query){
				echo "Error adding mark.";
			}
		}
		
		public static function addModulAssoc($cis_number,$modulnr){
			$query = mysql_query("INSERT INTO has_modul VALUES ('$cis_number','$modulnr')");
			if(!$query){
				echo "Error adding mark.";
			}
		}
		
		public static function getPassword($cis_number){
			$query = mysql_query("SELECT password FROM users WHERE cis_number = '$cis_number'");
			while($row = mysql_fetch_object($query)){
				return $row->password;
			}
		}
	}
?>
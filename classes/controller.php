<?php
	class controller{
		public function __construct(){
			include('dbConnection.php');
			include('querys.php');
			$dbConnection = new dbConnection();
		}
		public function isActiveNavigation($link){
			$link = "views/".$link.".php";
			if($link == $this->get_site($this)){
				return "class=active";
			}
		}
		public function get_site($controller){
			if(empty(htmlspecialchars(@$_GET['site']))){
				$site = "overview";
			}else{
				$site = htmlspecialchars($_GET['site']);
			}
			return "views/".$site.".php";
		}
		
		public function doRegister($cis_nummer,$cis_passwort){
		//Step 1: Check if user already exists in the Database
			if(!querys::checkUser($cis_nummer)){
			//Step 2: Get all data related by script
			//Step 3: Write the result data to the database
			}
		}
	}
?>

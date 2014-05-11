<?php
	class controller{
		public function __construct(){
			include('dbConnection.php');
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

	}
?>

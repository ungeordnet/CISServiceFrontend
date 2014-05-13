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
		
		public function doRegister($cis_number,$cis_password,$password){
		//Step 1: Check if user already exists in the Database
			if(!querys::checkUser($cis_number)){
			//Step 2: Check if CIS data is valid
			$cmd = "/home/peter/dev/cis_check.pl -validate -username $cis_number -password $cis_password 2>&1";
			$valid = shell_exec($cmd);
				if (empty($valid)){
				//Step 3: Get all data related by script and by parsing		
				//exec(/var/www/backend , $result);
				//TODO: Remove me, when the Backend is done
				$result = array();
				array_push($result, "forename:Jan");
				array_push($result, "surname:Werder");
				array_push($result, "email:jan.werder@nordakademie.de");
				array_push($result, "mark:Algorithmen & Datenstrukturen;3.0;09.05.2014");
				array_push($result, "mark:Englisch 1;3.0;09.05.2014");
				array_push($result, "curriculum:Algorithmen & Datenstrukturen;I107;6");
				array_push($result, "curriculum:Englisch 1;I128;5");
				array_push($result, "has_modul:I107");
				array_push($result, "has_modul:I128");
				
				
				$marks = array();
				$curriculum = array();
				$has_moduls = array();
				foreach($result as $line){
					if(substr_count($line,'forename') != 0){
					$forename = substr($line,9);
					}
					if(substr_count($line,'email') != 0){
					$email = substr($line,6);
					}
					if(substr_count($line,'surname') != 0){
					$surname = substr($line,8);
					}
					if(substr_count($line,'mark') != 0){
						if(substr_count($line,'mark') != 0){
						$mark_lines = explode(";",substr($line,5));
							if(sizeof($mark_lines) == 3){
								$subject = $mark_lines[0];
								$value = $mark_lines[1];
								$date = $mark_lines[2];
								$mark_entry = array($subject,$value,$date);
								array_push($marks, $mark_entry);
							}else{
								return "backenderror";
							}
						}
					}
					if(substr_count($line,'curriculum') != 0){
						$mark_lines = explode(";",substr($line,11));
							if(sizeof($mark_lines) == 3){
								$subject = $mark_lines[0];
								$modulnr = $mark_lines[1];
								$creditpoints = $mark_lines[2];
								$curriculum_entry = array($subject,$modulnr,$creditpoints);
								array_push($curriculum, $curriculum_entry);
							}else{
								return "backenderror";
							}
					}
					if(substr_count($line,'has_modul') != 0){
					array_push($has_moduls,substr($line,10));
					}
				}
				//Step 4: Check for curriculum changes
				foreach($curriculum as $curriculum_array){
					if(!querys::checkModul($curriculum_array[1])){
					//Curriculum existiert noch nicht (laut ModulNr), daher ist ein eintragen möglich
						querys::addModul($curriculum_array[0],$curriculum_array[2],$curriculum_array[1]);
					}
				}
				//Step 5: Write the result data to the database
				querys::addUser($forename,$surname,$password,$email,$cis_number,$cis_password);
				foreach($marks as $mark){
					querys::addMark($mark[0],$mark[1],$mark[2],$cis_number);				
				}
				foreach($has_moduls as $hm){
					querys::addModulAssoc($cis_number,$hm);
				}
				}else{
					return "wrongcisdata";
				}
			}else{
				return "useralreadyexists";
			}
		}
	}
?>

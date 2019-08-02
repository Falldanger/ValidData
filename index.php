<?php
	echo '<b>Validation of the entered data:</b></br>';
	
	class Valid{

		public static function validEmail($email){
			if(empty($email)){
				throw new Exception('Empty data');
			}
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				throw new Exception ('Invalid data');
			}
			else{
				throw new Exception('True');
			}
		}

		public static function validURL($url){
			if(empty($url)){
				throw new Exception('Empty data');
			}
			if(!filter_var($url,FILTER_VALIDATE_EMAIL)){
				throw new Exception ('Invalid URL');
			}
			else{
				throw new Exception('True');
			}
		}
	}

	try{
		//Valid::validEmail('bohdan.murga@gmail.com');
		Valid::validURL('httttp://|google.ua');
	}
	catch(Exception $e){
		echo $e->getMessage();
	}
?>
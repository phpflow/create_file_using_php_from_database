<?php
//create by phpflow.com
$fileDetails = array();
		$lines = array('0'=>'Hello','1'=>'I am parvez alam', '2'=>'From Noida');
		$fileName = "phpflow.txt";
		$stringData = '';
			$fileObj = fopen($fileName, 'w') or die("can't open file");
			foreach($lines as $line) {
				$stringData .= html_entity_decode($line)."\n";
			}
		if(fwrite($fileObj, $stringData))
		echo 'Successfully! file created';
		
		fclose($fileObj);
		unset($stringData, $lines);
?>
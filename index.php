<?php
	//image configs
	$width = "1"; //1px width
	$height = "1"; //1px height
	$myip = "174.116.43.58"; //so it does not log your IP and spam up the log file
	//end configs
	
	
	header('Content-Type: image/jpeg');
	$log = imagecreatetruecolor($width, $height);
	imagejpeg($log);
	imagedestroy($log);
	
		if ($_SERVER['REMOTE_ADDR'] !== $myip) {
		
			$x = fopen('iplog.txt', 'a');
			fwrite($x, $_SERVER['REMOTE_ADDR'] . ' | ' . $_SERVER['HTTP_REFERER']  . " \n");
			fclose($x);
			
		}
?>
<body bgcolor="000000">
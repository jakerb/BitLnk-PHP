<?php

// Simple BitLnk Shortening script for PHP 
// Visit: http://bitlnk.co

class bitLnk {

	function __construct($url) {
		$getBl = "http://www.bitlnk.co/shorten.php?url=" . $url;
		$result = file_get_contents($getBl);
		if($result == FALSE)  {
			echo "Cannot create BitLnk";
		}
		else {
			echo $result;
		}
	}
}

?>
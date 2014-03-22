<?php

// Simple BitLnk Shortening script for PHP 
// Visit: http://bitlnk.co

class bitLnk {

	function __construct($url) {
		$getApi = "http://www.bitlnk.co/api.php?url=" . $url;
		$result = file_get_contents($getApi);
		if($result == FALSE)  {
			echo "Cannot create BitLnk";
		}
		else {
			echo "http://bitlnk.co/" . $result;
		}
	}
}

?>
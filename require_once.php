<?php
	function require_twice($file){
		for ($i = 0; $i <= 1; $i++) {
			include($file);
		}
	}
?>

<?php
	function require_twice($file){
		$i=0;
		while($i <= 1):
			$i++;
			require($file);
		endwhile;
	}
?>

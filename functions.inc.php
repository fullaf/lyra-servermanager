<?php
function runDumbCommand($title,$cmd) {
	$output=shell_exec($cmd);
	echo "<h3>".$title."</h3>";
	echo "<pre>".$output."</pre>";
}
?>
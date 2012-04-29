<?php
require('header.inc.php');
require('footer.inc.php');
require('functions.inc.php')
?>

<?php getHeader('System Report'); ?>

<?php
runDumbCommand("Uptime","uptime");
runDumbCommand("Memory","free -m");
runDumbCommand("Time","date");
runDumbCommand("All Processes","ps -ef");
?>

<?php getFooter(); ?>
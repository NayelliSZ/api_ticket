<!DOCTYPE html>
<html>
<h1>Hola
<?php
	include_once 'apihelp.php';

	$api = new ApiTicket();
	$api->getAll();
?>
</html>
<?php

try {
		$connection = new PDO('mysql:dbname=dbcontact;host=localhost; charset=utf8','root',''); //funktioniert
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

?>
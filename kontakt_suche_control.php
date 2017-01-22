<?php
include("db_link.inc");


$ergebnis='';

	if(isset($_POST['submit'])) {

		$sucheingabe=$_POST['sucheingabe'];
		$query="SELECT name, givenName FROM contact WHERE name LIKE '$sucheingabe' OR givenName LIKE '$sucheingabe'";


		$ergebnis=array();
		$res=$connection->query($query); //vom Typ PDO Statement Object

		if($res){
			while($row=$res->fetch(PDO::FETCH_ASSOC)){
				$ergebnis[]=$row; //2-dimensionales Array
			}
		}

	}

?>
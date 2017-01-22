<?php
include("db_link.inc"); //Verbindung zur Datenbank herstellen
$error= "";
if(isset($_POST['submit'])) {
	if (empty($_POST["Nachname"])) {
		$error="Name ist ungültig<p>";
		}
		else {
		
		$Nachname=$_POST["Nachname"];
		$Vorname=$_POST["Vorname"];
		$Adresse=$_POST["Adresse"];
		$Titel_vor=$_POST["Titel_vor"];
		$Titel_nach=$_POST["Titel_nach"];
		$Titel_Anrede=$_POST["Titel_Anrede"];
		$Telefon=$_POST["Telefon"];
		$Email=$_POST["E-Mail"];
		$Geschlecht=$_POST["Geschlecht"];
		$Bemerkung=$_POST["Bemerkung"];
		
		
		

		$connection->beginTransaction();

		if ($Vorname!=='') {
			if ($Titel_vor!=='') {
				$connection->query("INSERT INTO contact (name, givenName, title, gendername) VALUES ('$Nachname','$Vorname','$Titel_vor','$Geschlecht')");
			}
			else {
				$connection->query("INSERT INTO contact (name, givenName, gendername) VALUES ('$Nachname','$Vorname','$Geschlecht')");	
			}
		}
		elseif ($Titel_vor!=='') {
				$connection->query("INSERT INTO contact (name, title, gendername) VALUES ('$Nachname','$Titel_vor','$Geschlecht')");	
		}
		else {
				$connection->query("INSERT INTO contact (name, gendername) VALUES ('$Nachname','$Geschlecht')");
		}

		$lastId=$connection->lastInsertId();


		if ($Adresse!=='') {
			$connection->query("INSERT INTO contactinformation (value, contactInformationTyp, contactId) VALUES ('$Adresse', 'Adresse - privat','$lastId')");
		}

		if ($Telefon!=='') {
			$connection->query("INSERT INTO contactinformation (value, contactInformationTyp, contactId) VALUES ('$Telefon', 'Telefon - privat','$lastId')");
		}

		if ($Email!=='') {
			$connection->query("INSERT INTO contactinformation (value, contactInformationTyp, contactId) VALUES ('$Email', 'E-Mail - privat','$lastId')");
		}


		if(isset($_POST["VF_IAS"])) {
			$connection->query("INSERT INTO contactlistrel (contactId, listName) VALUES ('$lastId', 'VF_IAS')");
		}

		if(isset($_POST["Professor"])) {
			$connection->query("INSERT INTO contactlistrel (contactId, listName) VALUES ('$lastId', 'Professor')");
		}

		if(isset($_POST["Industriepartner"])) {
			$connection->query("INSERT INTO contactlistrel (contactId, listName) VALUES ('$lastId', 'Industriepartner')");
		}

		if(isset($_POST["Wissenschaftliches_Kolloquium"])) {
			$connection->query("INSERT INTO contactlistrel (contactId, listName) VALUES ('$lastId', 'Wissenschaftliches Kolloquium')");
		}

		if(isset($_POST["Burgfest"])) {
			$connection->query("INSERT INTO contactlistrel (contactId, listName) VALUES ('$lastId', 'Burgfest')");
		}

		if(isset($_POST["Weihnachtskarte"])) {
			$connection->query("INSERT INTO contactlistrel (contactId, listName) VALUES ('$lastId', 'Weihnachtskarte')");
		}

		if(isset($_POST["Tätigkeitsbericht"])) {
			$connection->query("INSERT INTO contactlistrel (contactId, listName) VALUES ('$lastId', 'Tätigkeitsbericht')");
		}

		if(isset($_POST["Veröffentlichungsband"])) {
			$connection->query("INSERT INTO contactlistrel (contactId, listName) VALUES ('$lastId', 'Veröffentlichungsband')");
		}

		if($connection->commit()) {
   			echo("<script type=text/javascript>
           	window.alert('Kontakt hinzugefügt');
           	</script>"); 
        }   
        
         
		
	}
}

?>
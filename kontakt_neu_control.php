<?php
include("db_link.inc");
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

		$connection->query("INSERT INTO contact (name, gendername) VALUES ('$Nachname','$Geschlecht')");
		
   		echo("<script type=text/javascript>
           	window.alert('Kontakt hinzugefügt');
           	</script>");
		
	}
}

?>
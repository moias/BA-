<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	//include("Kontakt_neu_control.php");
	include("navleiste.php");

	?>

	<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<div id="Kontakt_neu_Wrapper" align="center">
		<form action="" method="post" >
			
			<label class="Kontakt_View">Nachname: </label>
			<input name="Nachname" type="text" class="Kontakt_Eingabe"><br>
			<label class="Kontakt_View">Vorname: </label>
			<input name="Vorname" type="text" class="Kontakt_Eingabe"><br>	
			<label class="Kontakt_View">Adresse: </label>
			<input name="Adresse" type="text" style="height:40px; width: 350px; margin-bottom: 5px;"><br>	
			<label class="Kontakt_View">Titel_vor: </label>
			<input name="Titel_vor" type="text" class="Kontakt_Eingabe"><br>
			<label class="Kontakt_View">Titel_nach: </label>
			<input name="Titel_nach" type="text" class="Kontakt_Eingabe"><br>		
			<label class="Kontakt_View">Titel_Anrede: </label>
			<input name="Titel_Anrede" type="text" class="Kontakt_Eingabe"><br>
			<label class="Kontakt_View">Telefon: </label>
			<input name="Telefon" type="text" class="Kontakt_Eingabe"><br>	
			<label class="Kontakt_View">E-Mail: </label>
			<input name="E-Mail" type="text" class="Kontakt_Eingabe"><br>	
			<label class="Kontakt_View">Geschlecht: </label>
			<select style="height:20px; width:350px">
				<option value="männlich">männlich</option>
				<option value="weiblich">weiblich</option>
			</select><br>	
			<label class="Kontakt_View">Bemerkung: </label>
			<input name="Bemerkung" type="text" class="Kontakt_Eingabe"><br>		
		</form>
	</div>

</body>
</html>
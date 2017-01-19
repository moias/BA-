<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	//include("Kontakt_neu_control.php");
	include("navleiste.php");
	include("kontakt_neu_control.php");

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
			
			<label class="Kontakt_View" style="position:relative; bottom:40px;">Adresse: </label>
			<textarea name="Adresse" type="text" rows="4" cols="40"  style="height:60px; width: 350px; display:inline-block;"></textarea></br>	
			
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
			<select name="Geschlecht" style="height:20px; width:350px">
				<option value="männlich">männlich</option>
				<option value="weiblich">weiblich</option>
			</select><br>	
			
			<label class="Kontakt_View">Bemerkung: </label>
			<input name="Bemerkung" type="text" class="Kontakt_Eingabe"><br><br>	

			<div id="Adresslisten_select">
				
				<input type="radio" class="Adresslisten_select" name="VF_IAS" value="VF_IAS"> VFIAS_Mitglied <br>

				<input type="radio" class="Adresslisten_select" name="Professor" value="Professor"> Professor <br>

				<input type="radio" class="Adresslisten_select" name="Industriepartner" value="Industriepartner"> Industriepartner <br>

				<input type="radio" class="Adresslisten_select" name="Wissenschaftliches_Kolloquium" value="Wissenschaftliches_Kolloquium"> Wissenschaftliches Kolloquium <br>

				<input type="radio" class="Adresslisten_select" name="Burgfest" value="Burgfest"> Burgfest <br>

				<input type="radio" class="Adresslisten_select" name="Weihnachtskarte" value="Weihnachtskarte"> Weihnachtskarte <br>

				<input type="radio" class="Adresslisten_select" name="Tätigkeitsbericht" value="Tätigkeitsbericht"> Tätigkeitsbericht <br>

				<input type="radio" class="Adresslisten_select" name="Veröffentlichungsband" value="Veröffentlichungsband"> Veröffentlichungsband <br>

			</div><br>

			<input name='submit' type='submit' value='Kontakt hinzufügen' style="position:relative; right:5px;">

		</form><br><br>
		<p style="position:relative; right:15px;">
		<?php echo $error ?>
		</p>
	</div>

</body>
</html>
<?php
include("navleiste.php");
include("kontakt_suche_control.php");
?>
<html>
<head>
<link href="styles.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="suche_wrapper" align="center">
	<form action='' method='post'>
		<input id='suche' name='sucheingabe' class='suchfeld' placeholder='Suche...' type='text'>
		<input id='submit' name='submit' type='submit' value='Suchen'>
	</form><br><br>


	<div id="suche_ergebnisse">
		<ul>
		<?php
		if ($ergebnis!==''){
			for($i=0; $i<=count($ergebnis)-1; $i++) {
				echo '<li>'.$ergebnis[$i]['name'].',&nbsp'.$ergebnis[$i]['givenName'].'</li><br>';
			}
		}

		?>
		</ul>
	</div>
</div>
</body>
</html>
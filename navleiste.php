<!DOCTYPE html>
<html lang="en">

<?php

session_start();
    if(!isset($_SESSION["login_user"])){
            echo 
            ("<script type=text/javascript>
            window.alert('Kein Zugriff!');
            window.location='index.php';
            </script>");
    }
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Menü</title>
	
	<script type="text/javascript" src="jquery.js"></script>
    <!--<script type="text/javascript" src="jquery-ui.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 

  
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Core CSS -->
    <link href="sidebar/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="sidebar/css/simple-sidebar.css" rel="stylesheet">
    

   
</head>

<body>

   
		<div id="wrapper">
			<!-- Sidebar -->
			<div id="sidebar-wrapper">
				<ul class="sidebar-nav">
					<li>
						<a href="#">Kontakte</a>
						<ul class="Kontakte-nav">
							<li>
								<a href="Suchfenster.php" id="Suchfenster_li">Suchen</a>
							</li>
							<li>
								<a href="#" id="Adresslisten_li">Adresslisten</a>
							</li>
							<li>
								<a href="Kontakt_neu.php" id="Kontakt_neu_li">Neuer Kontakt</a>
							</li>
							<li>
								<a href="#" id="Kontakt_bearbeiten_li">Kontake bearbeiten</a>
							</li>
							<li>
								<a href="#" id="Admin_li">Admin</a>
							</li>
						</ul>	
					</li>
					<li>
						<a href="#" id="Star_li">Studentische Arbeiten</a>
					</li>
					<li>
						<a href="#" id="Bibliothek_li">Bibliothek</a>
					</li>
					<li>
						<a href="#" id="Einstellungen_li">Einstellungen</a>
					</li>
					<li>
						<a href="logout.php" id="Logout_li">Logout</a>
					</li>
					
					<li>
							<a href="#" id="menu-toggle">Toggle</a>
					</li>
				  
				</ul>
			</div>
		</div>
			
			<!--Hilfe-->
			<div id='Hilfe' align='right'>
				Hilfe...
			</div>
	 
			
			<div id="Kontakt_neu_hilfe" align="center" class="Hilfe" style="visibility: hidden;">
				In diesem Menüpunkt lässt sich ein neuer Kontakt zur Datenbank hinzufügen
			</div>

			<div id="Suchfenster_hilfe" align="center" class="Hilfe" style="visibility: hidden;">
				In diesem Menüpunkt lassen sich Kontakte suchen
			</div>

			<div id="Adresslisten_hilfe" align="center" class="Hilfe" style="visibility: hidden;">
				In diesem Menüpunkt lassen sich die Adresslisten anzeigen
			</div>

			<div id="Kontakt_bearbeiten_hilfe" align="center" class="Hilfe" style="visibility: hidden;">
				In diesem Menüpunkt lässt sich ein ausgewählter Kontakt bearbeiten
			</div>

			<div id="Admin_hilfe" align="center" class="Hilfe" style="visibility: hidden;">
				In diesem Menüpunkt können die Benutzerrechte vergeben werden
			</div>

			<div id="Star_hilfe" align="center" class="Hilfe" style="visibility: hidden;">
				Zu Studentischen Arbeiten
			</div>

			<div id="Bibliothek_hilfe" align="center" class="Hilfe" style="visibility: hidden;">
				Zur Bibliothek
			</div>

			<div id="Einstellungen_hilfe" align="center" class="Hilfe" style="visibility: hidden;">
				Zu persönlichen Einstellungen
			</div>

			<div id="Logout_hilfe" align="center" class="Hilfe" style="visibility: hidden;">
				Von aktueller Sitzung abmelden
			</div>




		    <script>
		    $(document).ready(function(){
		        $("#Kontakt_neu_li").mouseover(function(){
					$("#Hilfe").hide();
		            $("#Kontakt_neu_hilfe").css("visibility","visible");  });
				$("#Kontakt_neu_li").mouseout(function(){
					$("#Kontakt_neu_hilfe").css("visibility","hidden");
					$("#Hilfe").show();  });

				$("#Suchfenster_li").mouseover(function(){
					$("#Hilfe").hide();
		            $("#Suchfenster_hilfe").css("visibility","visible");  });
				$("#Suchfenster_li").mouseout(function(){
					$("#Suchfenster_hilfe").css("visibility","hidden");
					$("#Hilfe").show();  });

				$("#Adresslisten_li").mouseover(function(){
					$("#Hilfe").hide();
		            $("#Adresslisten_hilfe").css("visibility","visible");  });
				$("#Adresslisten_li").mouseout(function(){
					$("#Adresslisten_hilfe").css("visibility","hidden");
					$("#Hilfe").show();  });

				$("#Kontakt_bearbeiten_li").mouseover(function(){
					$("#Hilfe").hide();
		            $("#Kontakt_bearbeiten_hilfe").css("visibility","visible");  });
				$("#Kontakt_bearbeiten_li").mouseout(function(){
					$("#Kontakt_bearbeiten_hilfe").css("visibility","hidden");
					$("#Hilfe").show();  });

				$("#Admin_li").mouseover(function(){
					$("#Hilfe").hide();
		            $("#Admin_hilfe").css("visibility","visible");  });
				$("#Admin_li").mouseout(function(){
					$("#Admin_hilfe").css("visibility","hidden");
					$("#Hilfe").show();  });

				$("#Star_li").mouseover(function(){
					$("#Hilfe").hide();
		            $("#Star_hilfe").css("visibility","visible");  });
				$("#Star_li").mouseout(function(){
					$("#Star_hilfe").css("visibility","hidden");
					$("#Hilfe").show();  });

				$("#Bibliothek_li").mouseover(function(){
					$("#Hilfe").hide();
		            $("#Bibliothek_hilfe").css("visibility","visible");  });
				$("#Bibliothek_li").mouseout(function(){
					$("#Bibliothek_hilfe").css("visibility","hidden");
					$("#Hilfe").show();  });

				$("#Einstellungen_li").mouseover(function(){
					$("#Hilfe").hide();
		            $("#Einstellungen_hilfe").css("visibility","visible");  });
				$("#Einstellungen_li").mouseout(function(){
					$("#Einstellungen_hilfe").css("visibility","hidden");
					$("#Hilfe").show();  });

				$("#Logout_li").mouseover(function(){
					$("#Hilfe").hide();
		            $("#Logout_hilfe").css("visibility","visible");  });
				$("#Logout_li").mouseout(function(){
					$("#Logout_hilfe").css("visibility","hidden");
					$("#Hilfe").show();  });
		         
		    }); 
		    </script>


  

    <!-- Bootstrap Core JavaScript -->
    <script src="sidebar/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


	
<script type="text/javascript">
var idleTime = 0;
$(document).ready(function () {
    //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 1000); // 1 sec

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });
});



function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 300) { // 
       alert("Sie wurden ausgeloggt!");
	   window.location = "http://localhost/logout.php";
     
    }
}
</script>  
	
	

</body>

</html>

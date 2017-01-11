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

   

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="#">Kontakte</a>
					<ul class="Kontakte-nav">
						<li>
							<a href="Suchfenster.php">Suchen</a>
						</li>
						<li>
							<a href="#">Adresslisten</a>
						</li>
						<li>
							<a href="Kontakt_neu.php" id="Kontakt_neu_li">Neuer Kontakt</a>
						</li>
						<li>
							<a href="#">Kontake bearbeiten</a>
						</li>
						<li>
							<a href="#">Admin</a>
						</li>
						</ul>	
                </li>
                <li>
                    <a href="#">Studentische Arbeiten</a>
                </li>
                <li>
                    <a href="#">Bibliothek</a>
                </li>
                <li>
                    <a href="#">Einstellungen</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
              
            </ul>
        </div>

        
        <!--Hilfe-->
        <div id='Hilfe' align='right'>
       		Hilfe...
        </div>
 
        
     <div id="Kontakt_neu_hilfe" align="center" style="visibility: hidden;">
        In diesem Menüpunkt lässt sich ein neuer Kontakt zur Datenbank hinzufügen
        </div>



    <script>
    $(document).ready(function(){
        $("#Kontakt_neu_li").mouseout(function(){
            $("#Kontakt_neu_hilfe").css("visibility","hidden");});
        $("#Kontakt_neu_li").mouseover(function(){
            $("#Kontakt_neu_hilfe").css("visibility","visible");
         });
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

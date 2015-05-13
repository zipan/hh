<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style2.css">
		<link rel="stylesheet" href="css/style_design_modus.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/change.js"></script>
		<script type="text/javascript" src="js/history_effect.js"></script>
	</head>

	<body id="body">
		<div id="wrapper">
			<?php
				include ("./nav.html");
			?>
			<div id="content">
				<ul id="history">
					<li onmouseover="bildzeigen('bild1991')" onmouseout="bildverstecken('bild1991')">1991 Gründung durch Stephan Hardmeier am heutigen Standort.</li>
					<li onmouseover="bildzeigen('bild1995')" onmouseout="bildverstecken('bild1995')">1994 Hanspeter Hardmeier kommt nach abgeschlossener Meisterprüfung in den Betrieb</li>
					<li onmouseover="bildzeigen('bild1997')" onmouseout="bildverstecken('bild1997')">1996 Erster Zimmermann wird angestellt.</li>
					<li onmouseover="bildzeigen('bild1998')" onmouseout="bildverstecken('bild1998')">1998 Erster Lehrling wird als Zimmermann ausgebildet</li>
					<li onmouseover="bildzeigen('bild1999')" onmouseout="bildverstecken('bild1999')">1999 Eigenes 2-Familienhaus wird gebaut</li>
					<li onmouseover="bildzeigen('bild2001')" onmouseout="bildverstecken('bild2001')">2001 Eigenes mehrstöckiges Holzhaus wird gebaut</li>
					<li onmouseover="bildzeigen('bild2006')" onmouseout="bildverstecken('bild2006')">2006 Holzschnitzelheizung geht in Betrieb</li>
					<li onmouseover="bildzeigen('bild2010')" onmouseout="bildverstecken('bild2010')">2010 10ter Lehrling beginnt seine Lehre</li>
					<li onmouseover="bildzeigen('bild2012')" onmouseout="bildverstecken('bild2012')">2012 Eine weitere Holzschnitzelheizung wandelt Restholz zu Wärme um</li>
					<li onmouseover="bildzeigen('bild2015')" onmouseout="bildverstecken('bild2015')">2015 Wir freuen uns, dass der 15te Zimmermannlehrling starten kann</li>
				</ul>
			</div>
		</div>
	</body>
</html>
<?php

$zieladresse = 'brhonn@gmail.com';
$absenderadresse = 'brhonn@gmail.com';
$absendername = 'Formmailer';
$betreff = 'Feedback';
$redirect_to = 'http://hardmeierholzbau.ch/kontakt.php';
$trenner = ":\t";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
$header = array();
$header[] = "From: ".mb_encode_mimeheader($absendername, "utf-8", "Q")." <".$absenderadresse.">";
$header[] = "MIME-Version: 1.0";
$header[] = "Content-type: text/plain; charset=utf-8";
$header[] = "Content-transfer-encoding: 8bit";

$mailtext = "";

foreach ($_POST as $name => $wert) {
	if (is_array($wert)) {
		foreach ($wert as $einzelwert) {
			$mailtext .= $name.$trenner.$einzelwert."\n";
		}
	} else {
		$mailtext .= $name.$trenner.$wert."\n";
	}
}

mail(
	$zieladresse, 
	mb_encode_mimeheader($betreff, "utf-8", "Q"), 
	$mailtext,
	implode("\n", $header)
) or die("Die Mail konnte nicht versendet werden.");
header("Location: $redirect_to");
exit;
}

header("Content-type: text/html; charset=utf-8");
?>
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
	</head>

	<body id="body">
		<div id="wrapper">
			<?php
				include ("./nav.html");
			?>
			<div id="content">
				<p>
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
				</p>
				<form id="kontaktform" action="" method="post">
					<div class="form_element">
						<label for="nachname">Nachname:</label><br>
						<input id="nachname" type="text" name="nachname"/>
					</div>
					<div class="form_element">
						<label for="vorname">Vorname:</label><br>
						<input id="vorname" type="text" name="vorname"/>
					</div>
					<div class="form_element">
						<label for="email">Ihre E-Mail Adresse:</label><br>
						<input id="email" type="text" name="email" />
					</div>
					<div class="form_element">
						<label for="email">Nachricht:</label><br>
						<textarea name="Nachricht" rows="10" cols="50"></textarea>
					</div>
					<p>
						<input type="submit" value="Senden" />
					</p>
				</form>
			</div>
		</div>
	</body>
</html>